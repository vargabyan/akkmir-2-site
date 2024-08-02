new Swiper('[data-banner-swiper]', {
    speed: 1000,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});


new Swiper('[data-popular-goods-swiper]', {
    spaceBetween: 20,
    speed: 1000,
    navigation: {
        nextEl: '[data-popular-goods-swiper-button-next]',
        prevEl: '[data-popular-goods-swiper-button-prev]',
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


new Swiper('[data-review-swiper]', {
    spaceBetween: 20,
    speed: 1000,
    navigation: {
        nextEl: '[data-review-swiper-button-next]',
        prevEl: '[data-review-swiper-button-prev]',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        992: {
            slidesPerView: 2,
        },
    }
});


new Swiper('[data-team-swiper]', {
    spaceBetween: 20,
    speed: 1000,
    breakpoints: {
        320: {
            slidesPerView: 1.5,
            grid: {
                rows: 1,
            }
        },
        768: {
            slidesPerView: 2,
            grid: {
                rows: 2,
            }
        },
    }
});


const swiperThumbs = new Swiper('[data-swiper-Thumbs-gallery]', {
    speed: 1000,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
        320: {
            slidesPerView: 4,
            spaceBetween: 12,
        },
        992: {
            slidesPerView: 6,
            spaceBetween: 14,
        },
    }
});
new Swiper('[data-swiper-gallery]', {
    speed: 1000,
    spaceBetween: 10,
    navigation: {
        nextEl: '[data-swiper-gallery-button-next]',
        prevEl: '[data-swiper-gallery-button-prev]',
    },
    thumbs: {
        swiper: swiperThumbs,
    },
});


Fancybox.bind('[data-fancybox="gallery"]', {});


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
        const allItemWrapper = document.querySelectorAll('.active[data-select-section-drop-menu]');

        allItemWrapper.forEach( item => {
            const _wrapper = item.closest('[data-select-section]');

            if (_wrapper !== wrapper) {
                item.classList.remove('active');
                _wrapper.querySelector('.active[data-select-section-value]').classList.remove('active');
            }
        })
        btn.classList.toggle('active');
        itemWrapper.classList.toggle('active');
    }
})

document.addEventListener('click', e => {
    const selectItem = e.target.closest('[data-popup-select-section-item]');

    if (selectItem) {
        const wrapper = selectItem.closest('[data-select-section]');
        const selectValue = wrapper.querySelector('[data-select-section-value]');
        const itemValue = wrapper.querySelector('[data-popup-select-section-item-value]');
        const itemWrapper = wrapper.querySelector('[data-select-section-drop-menu]');
        const allItems = wrapper.querySelectorAll('[data-popup-select-section-item]');

        selectItem.querySelector('input').checked = true;
        allItems.forEach( item => {
            item.querySelector('span').classList.remove('active');
        });
        selectItem.querySelector('span').classList.add('active');
        itemWrapper.classList.remove('active');
        selectValue.classList.remove('active');
        selectValue.classList.add('color');
        selectValue.textContent = itemValue.textContent;
    }
})

document.addEventListener('click', e => {
    const selectItem = e.target.closest('[data-select-section-item]');

    if (selectItem) {
        const wrapper = selectItem.closest('[data-select-section]');
        const selectValue = wrapper.querySelector('[data-select-section-value]');
        const itemWrapper = wrapper.querySelector('[data-select-section-drop-menu]');
        const allItems = wrapper.querySelectorAll('[data-select-section-item]');

        selectItem.checked = true;
        allItems.forEach( item => {
            item.parentNode.classList.remove('active');
        });
        selectItem.parentNode.classList.add('active');
        itemWrapper.classList.remove('active');
        selectValue.classList.remove('active');
        selectValue.classList.add('color');
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


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-review-item-btn-more]');

    if (btn) {
        const wrapper = btn.closest('[data-review-item-text-wrapper]');
        const text = wrapper.querySelector('[data-review-item-text]');

        text.classList.toggle('hidden');
        btn.textContent =  btn.textContent === 'Читать полностью' ? 'Скрыть' : 'Читать полностью';
    }
})

const reviewTextActions = () => {
    const AllWrapper = document.querySelectorAll('[data-review-item-text-wrapper]');

    AllWrapper.forEach(item => {
        const btn = item.querySelector('[data-review-item-btn-more]');
        const text = item.querySelector('[data-review-item-text]');

        setTimeout(() => {
            btn.classList.remove('active');
            text.classList.remove('hidden');

            const lineHeight = +window.getComputedStyle(text).lineHeight.split('px')[0];
            const webkitLineClamp = window.innerWidth < 570 ? '8' : '10';
            const textClientHeight = text.offsetHeight;

            if ((textClientHeight / lineHeight) > webkitLineClamp) {
                btn.classList.add('active');
                text.classList.add('hidden');
                text.style['webkitLineClamp'] = webkitLineClamp;
            }
        }, 150)
    })
}
document.addEventListener('DOMContentLoaded', reviewTextActions);
window.addEventListener('resize', reviewTextActions);


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-questions-btn-more]');

    if (btn) {
        const wrapper = btn.closest('[data-questions-description]');
        const item = wrapper.querySelectorAll('p');

        item.forEach( paragraph => {
            paragraph.classList.toggle('active');
        })
        btn.textContent =  btn.textContent === 'Читать полностью' ? 'Скрыть' : 'Читать полностью';
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-questions-item-question]');

    if (btn) {
        const wrapper = btn.closest('[data-questions-items-wrapper]');
        const item = btn.closest('[data-questions-item]');
        const allItem = wrapper.querySelectorAll('[data-questions-item]');

        allItem.forEach( each => {
            const question = each.querySelector('[data-questions-item-question]');
            const answer = each.querySelector('[data-questions-item-answer]');

            if (item !== each) {
                question.classList.remove('active');
                answer.classList.remove('active');
            } else {
                question.classList.toggle('active');
                answer.classList.toggle('active');
            }
        })
    }
})

document.addEventListener('DOMContentLoaded', () => {
    const allWrapper = document.querySelectorAll('[data-select-slider-wrapper]');

    allWrapper.forEach(wrapper => {
        const sliderOne = wrapper.querySelector('[data-select-slider-input-decrement]');
        const sliderTwo = wrapper.querySelector('[data-select-slider-input-increment]');
        const displayValOne = wrapper.querySelector('[data-select-slider-value-min]');
        const displayValTwo = wrapper.querySelector('[data-select-slider-value-max]');
        const minGap = 0;
        const sliderTrack = wrapper.querySelector('[data-select-slider-slider-track]');

        function fillColor() {
            const sliderMaxValue = wrapper.querySelector('[data-select-slider-input-decrement]');

            if (sliderMaxValue) {
                displayValOne.textContent = sliderOne.value;
                displayValTwo.textContent = sliderTwo.value;
                percent1 = (sliderOne.value / sliderMaxValue.max) * 100;
                percent2 = (sliderTwo.value / sliderMaxValue.max) * 100;
                sliderTrack.style.background = `linear-gradient(to right, #A1A1A1 ${percent1}% , #38BB5A ${percent1}%, #38BB5A ${percent2}%, #A1A1A1 ${percent2}%)`;
            }
        }

        wrapper.addEventListener('input', e => {
            const slider = e.target.closest('[data-select-slider-input-decrement]');

            if (slider) {
                if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
                    sliderOne.value = parseInt(sliderTwo.value) - minGap;
                }
                fillColor();
            }
        })

        wrapper.addEventListener('input', e => {
            const slider = e.target.closest('[data-select-slider-input-increment]');

            if (slider) {
                if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
                    sliderTwo.value = parseInt(sliderOne.value) + minGap;
                }
                fillColor();
            }
        })

        fillColor()


        document.addEventListener('click', e => {
            const btn = e.target.closest('[data-product-showcase-filter-params-btn-reset]');

            if (btn) {
                const form = btn.closest('[data-product-showcase-filter-params]');
                const allSelectSlider = form.querySelectorAll('[data-select-slider-wrapper]');

                allSelectSlider.forEach(item => {
                    const decrement = item.querySelector('[data-select-slider-input-decrement]');
                    const increment = item.querySelector('[data-select-slider-input-increment]');

                    decrement.value = decrement.min;
                    increment.value = decrement.max;
                    fillColor()
                })
            }
        })
    })
});


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-product-showcase-links-menu-open]');

    if (btn) {
        const wrapper = btn.closest('[data-product-showcase-links-menu]');
        const allWrapper = document.querySelectorAll('[data-product-showcase-links-menu]');

        allWrapper.forEach( item => {
            const hiddenEl = item.querySelector('[data-product-showcase-links-menu-drop-down]');
            const _btn = item.querySelector('[data-product-showcase-links-menu-open]');

            if (item !== wrapper) {
                hiddenEl.classList.remove('active');
                _btn.classList.remove('active');
            } else {
                hiddenEl.classList.toggle('active');
                _btn.classList.toggle('active');
            }
        })
    }
})

document.addEventListener('change', e => {
    const btn = e.target.closest('[data-product-showcase-select-filter-params] input');

    if (btn) {
        const wrapper = btn.closest('[data-product-showcase-select-filter-params]');
        const allLabel = wrapper.querySelectorAll('[data-product-showcase-select-filter-params-label]');

        allLabel.forEach( label => {
            if (btn === label.querySelector('input:checked')) {
                label.classList.add('active');
            } else {
                label.classList.remove('active');
            }
        })
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-product-showcase-filter-params-btn-reset]');

    if (btn) {
        const form = btn.closest('[data-product-showcase-filter-params]');
        const allSelect = form.querySelectorAll('[data-select-section]');

        allSelect.forEach(item => {
            const value = item.querySelector('[data-select-section-value]');
            const inputChecked = item.querySelector('[data-select-section-drop-menu] input:checked');
            const allItems = form.querySelectorAll('[data-select-section-item]');

            allItems.forEach( item => {
                item.parentNode.classList.remove('active');
            });
            value.textContent = 'Выбрать';
            value.classList.remove('active')
            value.classList.remove('color')
            if (inputChecked) inputChecked.checked = false;
        })
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-product-showcase-filter-btn-close]');

    if (btn) {
        const filter = btn.closest('[data-product-showcase-filter-mobile-wrapper]');

        filter.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})
document.addEventListener('click', e => {
    const btn = e.target.closest('[data-product-showcase-filter-btn-open-menu]');

    if (btn) {
        const filter = btn.closest('[data-product-showcase-filter-mobile-wrapper]');

        filter.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})


const paymentAndDeliveryAction = () => {
    const paymentText = document.querySelector('[data-payment-additional-text]');
    const deliveryText = document.querySelector('[data-delivery-additional-text]');

    if ((paymentText && deliveryText) && window.innerWidth < 570) {
        const parent = deliveryText.closest('[data-delivery]');

        parent.insertBefore(paymentText, deliveryText.nextSibling);
    } else if (document.querySelector('[data-payment]')) {
        const parent = document.querySelector('[data-payment]');
        const content = parent.querySelector('[data-payment-content]');

        parent.insertBefore(paymentText, content.nextSibling);
    }
}
window.addEventListener('resize', paymentAndDeliveryAction);
document.addEventListener('DOMContentLoaded', paymentAndDeliveryAction);


const productCardAction = () => {
    const tags = document.querySelector('[data-product-card-tags-wrapper]');
    const characteristic = document.querySelector('[data-product-card-characteristic-content]');

    if ((tags && characteristic) && window.innerWidth < 1200) {
        const parent = characteristic.parentNode;

        parent.insertBefore(tags, characteristic.nextSibling);
    } else if (document.querySelector('[data-link-all-characteristic]')) {
        const linkAllCharacteristic = document.querySelector('[data-link-all-characteristic]');
        const parent = linkAllCharacteristic.parentNode;

        parent.insertBefore(tags, linkAllCharacteristic.nextSibling);
    }
}
window.addEventListener('resize', productCardAction);
document.addEventListener('DOMContentLoaded', productCardAction);


const basketContentAction = () => {
    const wrapper = document.querySelector('[data-basket-products-wrapper]');

    if (wrapper) {
        const allItem = wrapper.querySelectorAll('[data-basket-products-item]');
        const basketEmpty = document.querySelector('[data-basket-empty]');
        const ketHaveProduct = document.querySelector('[data-basket-have-product]');

        if (allItem.length) {
            basketEmpty.classList.remove('active')
            ketHaveProduct.classList.add('active')
        } else {
            basketEmpty.classList.add('active')
            ketHaveProduct.classList.remove('active')
        }
    }
}
document.addEventListener('DOMContentLoaded', basketContentAction);

const basketTotalProduct = () => {
    const wrapper = document.querySelector('[data-basket-products-wrapper]');

    if (wrapper) {
        const allItem = wrapper.querySelectorAll('[data-basket-products-item]');
        const totalStock = document.querySelector('[data-basket-total-products-stock]');

        totalStock.textContent = allItem.length;
    }
}
document.addEventListener('DOMContentLoaded', basketTotalProduct);


const basketTotalPriceAction = () => {
    const wrapper = document.querySelector('[data-basket-products-wrapper]');

    if (wrapper) {
        const allItem = wrapper.querySelectorAll('[data-basket-products-item]');
        const totalPrice = document.querySelector('[data-basket-total-price]');
        let total = 0;

        allItem.forEach( item => {
            const price = item.querySelector('[data-basket-item-price]').textContent.replace(/ /g, '');
            const count = item.querySelector('[data-basket-counter-value]').textContent;

            total = total + (+price * +count);
        })
        totalPrice.textContent = total.toString().slice(0, 1) + ' ' + total.toString().slice(1);
    }
}
document.addEventListener('DOMContentLoaded', basketTotalPriceAction);


document.addEventListener('click', e => {
    const btnDecrement = e.target.closest('[data-basket-counter-decrement]');
    const btnIncrement = e.target.closest('[data-basket-counter-increment]');

    if (btnDecrement) {
        const counter = btnDecrement.closest('[data-basket-counter]');
        const value = counter.querySelector('[data-basket-counter-value]');
        const input = counter.querySelector('[data-basket-counter-input]');

        if ((+value.textContent > 1) && (+input.value > 1)) {
            input.value = +input.value - 1;
            value.textContent = +value.textContent - 1;
            basketTotalPriceAction()
        }

    } if (btnIncrement) {
        const counter = btnIncrement.closest('[data-basket-counter]');
        const value = counter.querySelector('[data-basket-counter-value]');
        const input = counter.querySelector('[data-basket-counter-input]');

        input.value = +input.value + 1;
        value.textContent = +value.textContent + 1;
        basketTotalPriceAction()
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-basket-btn-delet-item]');

    if (btn) {
        const item = btn.closest('[data-basket-products-item]');

        item.remove()
        basketTotalPriceAction()
        basketTotalProduct()
        basketContentAction()
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-basket-form-submit]');

    if (btn) {
        e.preventDefault();
        const wrapper = btn.closest('[data-basket-have-product]');
        const form = wrapper.querySelector('[data-basket-form]');
        const formContent = wrapper.querySelector('[data-basket-form-data]');
        const success = wrapper.querySelector('[data-basket-successful]');
        const itemWrapper = wrapper.querySelector('[data-basket-products-wrapper]');
        const allItem = itemWrapper.querySelectorAll('[data-basket-products-item]');
        const installation = wrapper.querySelector('[data-basket-total-price-need-installation-wrapper]');

        allItem.forEach(item => {
            item.querySelector('[data-basket-item-label-wrapper]').classList.remove('active');
            item.querySelector('[data-basket-btn-delet-item]').classList.remove('active');
            item.querySelector('[data-basket-counter]').classList.remove('active');
        })

        installation.classList.remove('active');
        form.classList.add('reverse');
        formContent.classList.remove('active');
        success.classList.add('active');
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-select-delivery-label]');

    if (btn && btn.querySelector('input')) {
        e.preventDefault();
        const wrapper = btn.closest('[data-delivery-label-wrapper]');
        const oldInput = wrapper.querySelector('.active[data-select-delivery-label]');

        oldInput.classList.remove('active');
        btn.classList.add('active');
    }
})
document.addEventListener('click', e => {
    const btn = e.target.closest('[data-select-delivery-label]');

    if (btn && btn.querySelector('input')) {
        e.preventDefault();
        const popup = btn.closest('[data-popup-container]');
        const selectContentID = btn.getAttribute('data-select-delivery-label')
        const deliveryContent = popup.querySelector('.active[data-select-delivery-wrapper]');
        const selectContent = popup.querySelector(`[data-select-delivery-wrapper="${selectContentID}"]`);

        deliveryContent.classList.remove('active');
        selectContent.classList.add('active');
    }
})


const headerFixedAction = () => {
    const header = document.querySelector('[data-header]');
    const body = document.querySelector('body');

    if ((window.innerWidth < 992) && (window.scrollY > 50)) {

        header.classList.add('fixed');
        body.classList.add('fixed');
    } else {
        header.classList.remove('fixed');
        body.classList.remove('fixed');
    }
}
document.addEventListener('scroll', headerFixedAction)
document.addEventListener('DOMContentLoaded', headerFixedAction)


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-popup-btn-close]');

    if (btn) {
        const wrapper = btn.closest('.active[data-popup-wrapper]');
        const container = wrapper.querySelector('.active[data-popup-container]');
        const successContainer = wrapper.querySelector('.active[data-success-container]');

        wrapper.classList.remove('active');
        if (container) container.classList.remove('active');
        if (successContainer) successContainer.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-popup-btn-submit]');

    if (btn) {
        e.preventDefault();
        const wrapper = btn.closest('.active[data-popup-wrapper]');
        const container = wrapper.querySelector('.active[data-popup-container]');
        const successContainer = wrapper.querySelector('[data-success-container]');

        container.classList.remove('active');
        successContainer.classList.add('active');
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-order-popup]');

    if (btn) {
        const popupID = btn.getAttribute('data-order-popup');
        const wrapper = document.querySelector(`[data-popup-wrapper="${popupID}"]`);
        const container = wrapper.querySelector('[data-popup-container]');

        wrapper.classList.add('active');
        container.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-btn-select-city-btn]');

    if (btn) {
        const modalWrapper = document.querySelector('[data-popup-select-city]');

        modalWrapper.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})
document.addEventListener('click', e => {
    const input = e.target.closest('[data-popup-select-input]');

    if (input) {
        const modalWrapper = input.closest('[data-popup-select-city]');
        const allBtnOpen = document.querySelectorAll('[data-btn-select-city-value]');

        allBtnOpen.forEach( item => {
            item.textContent = input.querySelector('input').value;
        })
        modalWrapper.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})
document.addEventListener('input', e => {
    const input = e.target.closest('[data-popup-select-search-input]');

    if (input) {
        const modalWrapper = input.closest('[data-popup-select-city]');
        const formItems = modalWrapper.querySelectorAll('[data-popup-select-input]');

        Object.values(formItems).forEach( item => {
            if (item.textContent.toLocaleUpperCase().search(input.value.toLocaleUpperCase()) > -1) {
                item.style['display'] = 'flex';
            } else {
                item.style['display'] = 'none';
            }
        })
    }
})


document.addEventListener('input', e => {
    const input = e.target.closest('[data-header-search-label] input');

    if (input) {
        const wrapper = input.closest('[data-header-panel-search-form]');
        const itemsWrapper = wrapper.querySelector('[data-header-panel-search-items-wrapper]');

        if (input.value) {
            itemsWrapper.classList.add('active')
        } else {
            itemsWrapper.classList.remove('active')
        }
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-btn-open-mobile-menu]');

    if (btn) {
        const menu = document.querySelector('[data-mobile-menu]');

        menu.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})
document.addEventListener('click', e => {
    const btn = e.target.closest('[data-btn-close-mobile-menu]');

    if (btn) {
        const menu = btn.closest('[data-mobile-menu]');

        menu.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-mobile-menu-btn-open-submenu]');

    if (btn) {
        const linksWrapper = btn.closest('[data-mobile-menu-links-wrapper]');
        const submenu = linksWrapper.querySelector('[data-mobile-menu-submenu]');

        btn.classList.toggle('open');
        submenu.classList.toggle('active');
    }
})


document.addEventListener('mouseover',  e => {
    const btn = e.target.closest('[data-grade-star-label] input');

    if (btn) {
        const allItem = document.querySelectorAll('[data-grade-star-label]');
        let currentIndex;

         allItem.forEach( (item, index) => {
            if (btn === item.querySelector('input')) {
                currentIndex = index;
            }
        })
        allItem.forEach( (item, index) => {
            if (index  <= currentIndex) {
                item.classList.add('active');
            }
        })
    }
    else {
        const allItem = document.querySelectorAll('[data-grade-star-label]');

        allItem.forEach( (item, index) => {
            item.classList.remove('active');
        })
    }
})
document.addEventListener('mouseover',  e => {
    const btn = e.target.closest('[data-grade-star-label] input');

    if (btn) {
        const allItem = document.querySelectorAll('[data-grade-star-label]');
        let currentIndex;

         allItem.forEach( (item, index) => {
            if (btn === item.querySelector('input')) {
                currentIndex = index;
            }
        })
        allItem.forEach( (item, index) => {
            if (index  > currentIndex) {
                item.classList.remove('active');
            }
        })
    }
})
document.addEventListener('click',  e => {
    const btn = e.target.closest('[data-grade-star-label] input');

    if (btn && btn.checked) {
        const wrapper = btn.closest('[data-grade-wrapper]');
        const allItem = wrapper.querySelectorAll('[data-grade-star-label]');
        let currentIndex;

        allItem.forEach( (item, index) => {
            if (btn === item.querySelector('input')) {
                currentIndex = index;
            }
        })
        allItem.forEach( (item, index) => {
            if (btn !== item.querySelector('input')) {
                item.querySelector('input').checked = false;
            }
            if (index < currentIndex){
                item.classList.add('active');
            }
        })
    }
})
document.addEventListener('mouseover',  e => {
    const wrapper = e.target.closest('[data-grade-wrapper]');
    const checkedItem = document.querySelector('[data-grade-star-label] input:checked');

    if (!wrapper) {
        const allItem = document.querySelectorAll('[data-grade-star-label]');
        let currentIndex;

        allItem.forEach( (item, index) => {
            if (checkedItem === item.querySelector('input')) {
                currentIndex = index;
            }
        })
        allItem.forEach( (item, index) => {
            if (index  <= currentIndex) {
                item.classList.add('active');
            }
            else if (index  > currentIndex) {
                item.classList.remove('active');
            }
        })
    }
})


document.addEventListener('input', e => {
    const input = e.target.closest('[data-popup-search-input]');

    if (input && input.value) {
        const wrapper = input.closest('[data-popup-search-section]');
        const itemsWrapper = wrapper.querySelector('[data-popup-search-items-wrapper]');

        itemsWrapper.classList.add('active')
    } else if (input) {
        const wrapper = input.closest('[data-popup-search-section]');
        const itemsWrapper = wrapper.querySelector('[data-popup-search-items-wrapper]');

        itemsWrapper.classList.remove('active')
    }
})

document.addEventListener('click', e => {
    const item = e.target.closest('[data-popup-search-items-wrapper] span');

    if (item) {
        const wrapper = item.closest('[data-popup-search-section]');
        const input = wrapper.querySelector('[data-popup-search-input]');
        const itemsWrapper = item.closest('[data-popup-search-items-wrapper]');

        input.value = item.textContent;
        itemsWrapper.classList.remove('active')
    }
})


document.addEventListener('click', e => {
    const item = e.target.closest('[data-clue-btn-close]');

    if (item) {
        const wrapper = item.closest('[data-clue-wrapper]');
        const content = wrapper.querySelector('[data-clue-content]');

        content.classList.remove('active')
    }
})

document.addEventListener('click', e => {
    if (!e.target.closest('.active[data-clue-content]')) {
        const allActiveContents = document.querySelectorAll(' .active[data-clue-content]');

        allActiveContents.forEach( item => {
            item.classList.remove('active')
        })
    }
})

document.addEventListener('click', e => {
    const item = e.target.closest('[data-clue-btn-open]');

    if (item) {
        const wrapper = item.closest('[data-clue-wrapper]');
        const content = wrapper.querySelector('[data-clue-content]');

        content.classList.add('active')
    }
})

