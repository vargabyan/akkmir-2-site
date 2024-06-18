new Swiper('[data-banner-swiper]', {
    speed: 1000,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
    },
});


new Swiper('[data-often-ordering-in-bulk-swiper]', {
    spaceBetween: 20,
    speed: 1000,
    navigation: {
        nextEl: '[data-often-ordering-in-bulk-swiper-button-next]',
        prevEl: '[data-often-ordering-in-bulk-swiper-button-prev]',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
        1440: {
            slidesPerView: 4,
        }
    }
});


document.addEventListener('click', e => {
    const wrapper = e.target.closest('[data-select-section]');
    const allItemWrapper = document.querySelectorAll('.active[data-select-section-drop-menu]');

    if (!wrapper && allItemWrapper.length) {
        allItemWrapper.forEach( item => {
            const _wrapper = item.closest('[data-select-section]');

            item.classList.remove('active');
            _wrapper.querySelector('.active[data-select-section-value]').classList.remove('active');
        })
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-select-section-value]');

    if (btn) {
        const wrapper = btn.closest('[data-select-section]');
        const itemWrapper = wrapper.querySelector('[data-select-section-drop-menu]');

        btn.classList.toggle('active');
        itemWrapper.classList.toggle('active');
    }
})

document.addEventListener('click', e => {
    const selectItem = e.target.closest('[data-select-section-item]');

    if (selectItem) {
        const wrapper = selectItem.closest('[data-select-section]');
        const selectValue = wrapper.querySelector('[data-select-section-value]');
        const itemWrapper = wrapper.querySelector('[data-select-section-drop-menu]');

        itemWrapper.classList.remove('active');
        selectValue.classList.remove('active');
        selectValue.textContent = selectItem.value;
    }
})


const popularProductInsertAction = () => {
    const AllParent = document.querySelectorAll('[data-popular-goods-transfer-parent]');

    AllParent.forEach( item => {
        if (window.innerWidth < 570) {
            const transferPlaceOne = item.querySelector('[data-popular-goods-transfer-place-one]');
            const transferEl = item.querySelector('[data-popular-goods-transfer-el]');

            item.insertBefore(transferEl, transferPlaceOne);

        } else {
            const transferEl = item.querySelector('[data-popular-goods-transfer-el]');
            const transferPlaceTwo = item.querySelector('[data-popular-goods-transfer-place-two]');
            const parent = transferPlaceTwo.parentNode;

            parent.insertBefore(transferEl, transferPlaceTwo.nextSibling);
        }
    })
}
document.addEventListener('DOMContentLoaded', popularProductInsertAction);
window.addEventListener('resize', popularProductInsertAction);