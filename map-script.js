function init() {
    const coreMap = new ymaps.Map('map', {
        center: [56.83, 60.60],
        zoom: 11,
    }, {
        searchControlProvider: 'yandex#search',
    })

    const objectManager = new ymaps.ObjectManager({
        clusterSize: true,
        gridSize: 32,
        clusterDisableClickZoom: true,
    });

    const newOptions = {
        iconLayout: 'default#image',
        iconImageHref: 'images/map-marker-icon.png',
        iconImageSize: [28, 48],
        iconImageOffset: [-15, -42],
        balloonContentLayout: ymaps.templateLayoutFactory.createClass(
            '<div class="map-marker_description" data-map-marker-description>\n' +
            '            <p class="map-marker_description_title">\n' +
            '                Адрес:\n' +
            '                <span>{{ properties.city }} {{ properties.address }}</span>\n' +
            '            </p>\n' +
            '            <p class="map-marker_description_title">\n' +
            '                Режим работы:\n' +
            '                <span>{{ properties.workHours }}</span>\n' +
            '            </p>\n' +
            '    <a class="map-marker_description_tel" href="tel:{{ properties.tel }}">{{ properties.tel }}</a>\n' +
            '</div>'
        )
    }

    objectManager.objects.options.set(newOptions);
    objectManager.clusters.options.set(newOptions);


    objectManager.objects.events.add(['mouseenter', 'mouseleave'], function(e) {
        const objectId = e.get('objectId');
        if (e.get('type') === 'mouseenter') {
            objectManager.objects.setObjectOptions(objectId, {
                iconImageHref: 'images/map-marker-icon-hover.png'
            });
        } else {
            objectManager.objects.setObjectOptions(objectId, {
                iconImageHref: 'images/map-marker-icon.png'
            });
        }
    });

    objectManager.objects.events.add('balloonclose', function (e) {
        const objectId = e.get('objectId');
        objectManager.objects.setObjectOptions(objectId, {
            iconImageHref: 'images/map-marker-icon.png'
        });
    });

    objectManager.objects.events.add(['click'], function (e) {
        const objectId = e.get('objectId');
        const currentMarker = objectManager.objects.getById(objectId);
        const allItems = document.querySelectorAll('[data-map-contacts-item]');
        const allUnderMapItems = document.querySelectorAll('[data-map-under-contacts-item]');

        allItems.forEach(eachItem => {
            eachItem.classList.remove('active');
        })
        allUnderMapItems.forEach(eachItem => {
            eachItem.classList.remove('active');
        })

        const wrapper = document.querySelector('[data-map-contacts-item-wrapper]');
        const item = document.querySelector(`[data-map-contacts-item="${currentMarker.id}"]`);
        item.classList.add('active');
        wrapper.scrollTo({left: 0, top: item.offsetTop - wrapper.offsetTop, behavior: 'smooth'});

        if (document.querySelector(`[data-map-under-contacts-item="${currentMarker.id}"]`)) {
            document.querySelector(`[data-map-under-contacts-item="${currentMarker.id}"]`).classList.add('active');
        }
    });

    document.addEventListener('click', e => {
        const item = e.target.closest('[data-map-contacts-item]');

        if (item) {
            const address = item.getAttribute('data-map-contacts-item');
            let found = false;

            if (window.innerWidth < 992 && document.querySelector('[data-popup-map-content]')) {
                const map = document.querySelector('[data-popup-map-content="map"]')
                const items = document.querySelector('[data-popup-map-content="items"]')
                const BtnItems = document.querySelector('[data-popup-map-switch-btn="items"]')
                const BtnMap = document.querySelector('[data-popup-map-switch-btn="map"]')

                items.classList.remove('active')
                BtnItems.classList.remove('active')
                map.classList.add('active')
                BtnMap.classList.add('active')

                const allUnderMapItems = document.querySelectorAll('[data-map-under-contacts-item]');

                allUnderMapItems.forEach(eachItem => {
                    eachItem.classList.remove('active');
                })
                document.querySelector(`[data-map-under-contacts-item="${address}"]`).classList.add('active');
            }

            objectManager.objects.each(function(object) {
                if (address) {
                    const center = coreMap.getCenter();
                    coreMap.setCenter(object.geometry.coordinates, 12);
                    objectManager.objects.balloon.open(address);
                    found = true;
                }
            });

            if (!found) {
                alert('Метка с такими координатами не найдена.');
            }
        }
    })

    coreMap.geoObjects.add(objectManager);

    $.ajax({
        url: "data.json"
    }).done(function(data) {
        objectManager.add(data);
    });

};

ymaps.ready(init);