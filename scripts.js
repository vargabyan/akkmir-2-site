new Swiper('[data-banner-swiper]', {
    speed: 1000,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
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
    const selectItem = e.target.closest('[data-select-section-item]');

    if (selectItem) {
        const wrapper = selectItem.closest('[data-select-section]');
        const selectValue = wrapper.querySelector('[data-select-section-value]');
        const itemWrapper = wrapper.querySelector('[data-select-section-drop-menu]');

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
    } else {
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
    } else {
        const linkAllCharacteristic = document.querySelector('[data-link-all-characteristic]');
        const parent = linkAllCharacteristic.parentNode;

        parent.insertBefore(tags, linkAllCharacteristic.nextSibling);
    }
}
window.addEventListener('resize', productCardAction);
document.addEventListener('DOMContentLoaded', productCardAction);





