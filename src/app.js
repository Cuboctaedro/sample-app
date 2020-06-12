import Swiper from 'swiper';
import Glide from '@glidejs/glide';

const activateTabs = () => {
    const tabs = document.getElementById('tabs');

    const tabButtons = Array.from(tabs.querySelectorAll('[role="tab"]'));
    const tabPanels = Array.from(tabs.querySelectorAll('[role="tabpanel"]'));
    
    tabButtons.forEach((button) => {
        button.addEventListener(
            'click',
            () => {
                if (button.getAttribute('aria-selected') === 'false' ) {
                    button.setAttribute('aria-selected', 'true');
                    let currentTab = tabPanels.find(
                        (panel) => {return panel.id === button.getAttribute('aria-controls')} 
                    );
                    currentTab.removeAttribute('hidden');
                    tabButtons.forEach((item) => {
                        if ( item !== button ) {
                            item.setAttribute('aria-selected', 'false');
                        }
                    });
                    tabPanels.forEach((panel) => {
                        if(panel !== currentTab) {
                            panel.setAttribute('hidden', 'true');
                        }
                    })
                }
            },
            false
        );
    });
}

activateTabs();

const toggleMenu = () => {
    const burger = document.getElementById('burger');
    const menu = document.getElementById('menu');
    burger.addEventListener(
        'click',
        () => {
            burger.classList.toggle('is-open');
            if (menu.getAttribute('hidden') !== null) {
                menu.removeAttribute('hidden');
                menu.classList.add('is-visible');
            } else {
                menu.setAttribute('hidden', 'true');
                menu.classList.remove('is-visible');
            }
        },
        false,
    );
}
toggleMenu();

playlistTitles.forEach((slug) => {
    let selector = '.swiper-container-' + slug;

    new Glide(selector, {
        type: 'carousel',
        perView: 5,
        gap: 20,
        breakpoints: {
            767: {
                perView: 3,
                gap: 5,
            },
            1023: {
                perView: 4,
                gap: 10,
            }
        }

      }).mount();

})
