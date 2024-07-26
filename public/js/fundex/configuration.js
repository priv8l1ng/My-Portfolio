
        // const modal = document.querySelector("#dex-modals");
        // const modals = document.querySelector(".dex-modal");
        // const openModal = document.querySelector(".dex-modal-open");
        // const openModal1 = document.querySelector(".dex-modal-show");
        // const closeModal = document.querySelector(".dex-modal-close");

        // openModal.addEventListener("click", (e) => {
        // e.preventDefault();
        // modals.classList.remove("animated", "zoomOut");
        // modals.classList.add("animated", "zoomIn");
        // setTimeout(() => {
        //     modal.style.display = "flex";
        // }, 100);
        // });

        // openModal1.addEventListener("click", (e) => {
        // e.preventDefault();
        // modals.classList.remove("animated", "zoomOut");
        // modals.classList.add("animated", "zoomIn");
        // setTimeout(() => {
        //     modal.style.display = "flex";
        // }, 100);
        // });

        // closeModal.addEventListener("click", (e) => {
        // e.preventDefault();
        // modals.classList.remove("animated", "zoomIn");
        // modals.classList.add("animated", "zoomOut");
        // setTimeout(() => {
        //     modal.style.display = "none";
        // }, 150);
        // });


        // -- MAKING NAVBAR STICKY POSITION -- \\

        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById("navbar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
        // -- END NAVBAR STICKY POSITION -- \\

        var dexcard = document.querySelector('#dex-card-input');
        var dexcard1 = document.querySelector('#dex-card-output');
        var toggler = document.querySelector('.dex-toggler-switch');
        var dropdownHover = document.querySelector('.navlink-dropdown');

        dropdownHover.addEventListener("click", function () {
            document.getElementsByClassName('dropdown-content');
        });
        
        window.onclick = function(event) {
            if (!event.target.matches('.navlink-dropdown')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                    }
                }
            }
        }


        toggler.addEventListener("click", function() {
            var a = dexcard1.cloneNode(true);
            var a1 = dexcard.cloneNode(true);
            while(dexcard.firstChild) {
                dexcard.removeChild(dexcard.firstChild)
            }
            while(dexcard1.firstChild) {
                dexcard1.removeChild(dexcard1.firstChild)
            }
            setInterval(function(){
                dexcard.innerHTML("");
                dexcard1.innerHTML("");
            },2000);
            dexcard.append(a);
            dexcard1.append(a1);
        });

        //-- CONFIGURATION DEX MODAL --\\   

        $(document).ready(() => {
            let modal = $('#dex-modals');
            let modals = $('.dex-modal');
            let settingModal = $('#setting-dex-modal');
            let settingModals = $('.dex-modal-setting');
            let openModal = $('.dex-modal-open')[0];
            let openModal1 = $('.dex-modal-open')[1];
            let opensettingModal = $('#setting');
            
            setInterval(function() {
                $(openModal).click(function() {
                    modals.removeClass('animated zoomOut');
                    modals.addClass('animated zoomIn');
                    setTimeout(() => {
                        modal.css('display', 'flex');
                    }, 100);
                });
    
                $(openModal1).click(function() {
                    modals.removeClass('animated zoomOut');
                    modals.addClass('animated zoomIn');
                    setTimeout(() => {
                        modal.css('display', 'flex');
                    }, 100);
                });
            },100);

                $(opensettingModal).click(() => {
                    settingModals.removeClass('animated zoomOut');
                    settingModals.addClass('animated zoomIn');
                    setTimeout(() => {
                        settingModal.css('display', 'flex');
                    }, 100);
                });
    
                $(".dex-modal-close").click(function() {
                    modals.removeClass('animated zoomIn');
                    modals.addClass('animated zoomOut');
                    setTimeout(() => {
                        $('.input-search-dex').val('');
                        modal.css('display', 'none');
                    }, 200);
                    setTimeout(() => {
                        $('.back').css('display', 'none');
                        $('.front').css('display', 'flex');
                    }, 400);
                });
                
                $("#setting-dex-modal-close").click(function() {
                    settingModals.removeClass('animated zoomIn');
                    settingModals.addClass('animated zoomOut');
                    setTimeout(() => {
                        $('.input-search-dex').val('');
                        settingModal.css('display', 'none');
                    }, 200);
                });
                
                $(".input-search-dex").keyup(function() {
                    var value = $(this).val().toLowerCase();
                    $(".dex-list-wallet").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                    });
                });
    
                $(".dex-list-wallet").click(function() {
                    var value = $(this).text().toLowerCase();
                    $(".input-search-dex").val(value);
                    $(".dex-list-wallet").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                    });
                });
    
                $(document).mouseup(function(e) {
                    //close dex modal when click backdrop
                    var container = $("#dex-modals");
                    if (container.is(e.target) && container.has(e.target).length === 0) {
                        // container.hide();
                        modals.removeClass('animated zoomIn');
                        modals.addClass('animated zoomOut');
                        setTimeout(() => {
                            $('.input-search-dex').val('');
                            modal.css('display', 'none');
                        }, 150);
                        setTimeout(() => {
                            $('.back').css('display', 'none');
                            $('.front').css('display', 'flex');
                        }, 400);
                    }

                    //close setting dex modal when click backdrop
                    var container = $(settingModal);
                    if (container.is(e.target) && container.has(e.target).length === 0) {
                        // container.hide();
                        settingModals.removeClass('animated zoomIn');
                        settingModals.addClass('animated zoomOut');
                        setTimeout(() => {
                            $('.input-search-dex').val('');
                            settingModal.css('display', 'none');
                        }, 150);
                    }
                });
        });

        //-- CONFIGURATION INPUT TEXT ONLY FLOAT / NUMBER --\\

        $(document).ready(function(){
            (function($) {
            $.fn.inputFilter = function(callback, errMsg) {
                return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function(e) {
                if (callback(this.value)) {
                    // Accepted value
                    if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
                    // $(this).removeClass("input-error");
                    // this.setCustomValidity("");
                    }
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    // Rejected value - restore the previous one
                    // $(this).addClass("input-error");
                    // this.setCustomValidity(errMsg);
                    this.reportValidity();
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    // Rejected value - nothing to restore
                    this.value = "";
                }
                });
            };
            }(jQuery));

            setInterval(function() {
                $("#input-from-balance1").inputFilter(function(value) {
                    // return /^\d*$/.test(value);    // Allow digits only, using a RegExp
                    return /^\d*\.?\d*$/.test(value);
                }, "Please enter a valid number");
    
                $("#input-from-balance2").inputFilter(function(value) {
                    // return /^\d*$/.test(value);    // Allow digits only, using a RegExp
                    return /^\d*\.?\d*$/.test(value);
                }, "Please enter a valid number");            
            },1000);
        });

        function autoSetTitleWithPriceSUI() {
            const head = { 'rensmtnet': 'dev' };
            axios.get('/getSuiPrice', headers=head).then(function (response) {
                document.title = `Exchange | Salmonation (${response.data.price})`;
            }).catch(function() {
                document.title = `Exchange | Salmonation`;
            });
        }
        autoSetTitleWithPriceSUI();
        setInterval(function(){
            autoSetTitleWithPriceSUI();
        }, 30000);

        $(function() {
            //caches a jQuery object containing the header element
            var header = $('nav');
            $(window).scroll(function() {
               var scroll = $(window).scrollTop();
               if (scroll >= header.height()) {
                 header.fadeOut();
               } else {
                header.fadeIn();
              }
            });
        });

    //-- CONFIGURATION SWIPER JS  --\\
        // Params
    var sliderSelector = '.swiper',
        options = {
          init: false,
          loop: true,
          speed:800,
          slidesPerView: 1, // or 'auto'
          // spaceBetween: 10,
          centeredSlides : true,
          effect: 'fade', // 'cube', 'fade', 'coverflow',
          fadeeffect: {
            rotate: 50, // Slide rotate in degrees
            stretch: 0, // Stretch space between slides (in px)
            depth: 100, // Depth offset in px (slides translate in Z axis)
            modifier: 1, // Effect multipler
            slideShadows : true, // Enables slides shadows
          },
          grabCursor: true,
          parallax: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 1,
              spaceBetween: 40,
            },
            1024: {
              slidesPerView: 1,
              spaceBetween: 50,
            },
          },
          // Events
          on: {
            imagesReady: function(){
              this.el.classList.remove('loading');
            }
          }
        };
    var mySwiper = new Swiper(sliderSelector, options);
    
    // Initialize slider
    mySwiper.init();