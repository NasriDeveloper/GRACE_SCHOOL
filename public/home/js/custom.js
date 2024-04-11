document.addEventListener('DOMContentLoaded', function() {
    "use strict";

    document.querySelectorAll('.chips').forEach(function(chip) {
        M.Chips.init(chip);
    });

    document.querySelectorAll('select').forEach(function(select) {
        M.FormSelect.init(select);
    });

    // FILTER SELECT OPTIONS
    document.querySelector(".wed-fil-1").addEventListener('click', function() {
        document.querySelector(".fil-1").classList.add("filt-eff");
        document.querySelector(".fil-2").classList.add('filt-eff-1');
    });

    // FILTER SELECT OPTIONS
    document.querySelector(".wed-fil-2").addEventListener('click', function() {
        document.querySelector(".fil-2").classList.remove("filt-eff-1");
        document.querySelector(".fil-3").classList.add("filt-eff-1");
    });

    // FILTER SELECT OPTIONS
    document.querySelector(".wed-fil-3").addEventListener('click', function() {
        document.querySelector(".fil-3").classList.remove("filt-eff-1");
        document.querySelector(".fil-4").classList.add("filt-eff-1");
    });

    // FILTER SELECT OPTIONS
    document.querySelector(".wed-fil-4").addEventListener('click', function() {
        document.querySelector(".fil-4").classList.remove("filt-eff-1");
        document.querySelector(".fil-5").classList.add("filt-eff-1");
    });

    // MEGA MENU
    document.querySelector(".about-menu").addEventListener('mouseenter', function() {
        document.querySelector(".about-mm").style.display = 'block';
    });
    document.querySelector(".about-menu").addEventListener('mouseleave', function() {
        document.querySelector(".about-mm").style.display = 'none';
    });

    // MEGA MENU
    document.querySelector(".admi-menu").addEventListener('mouseenter', function() {
        document.querySelector(".admi-mm").style.display = 'block';
    });
    document.querySelector(".admi-menu").addEventListener('mouseleave', function() {
        document.querySelector(".admi-mm").style.display = 'none';
    });

    // MEGA MENU
    document.querySelector(".cour-menu").addEventListener('mouseenter', function() {
        document.querySelector(".cour-mm").style.display = 'block';
    });
    document.querySelector(".cour-menu").addEventListener('mouseleave', function() {
        document.querySelector(".cour-mm").style.display = 'none';
    });

    // SINGLE DROPDOWN MENU
    document.querySelector(".top-drop-menu").addEventListener('click', function() {
        document.querySelector(".man-drop").style.display = 'block';
    });
    document.querySelector(".man-drop").addEventListener('mouseleave', function() {
        document.querySelector(".man-drop").style.display = 'none';
    });
    document.querySelector(".wed-top").addEventListener('mouseleave', function() {
        document.querySelector(".man-drop").style.display = 'none';
    });

    // SEARCH BOX
    document.querySelector("#sf-box").addEventListener('click', function() {
        document.querySelector(".sf-list").style.display = 'block';
    });
    document.querySelector(".sf-list").addEventListener('mouseleave', function() {
        document.querySelector(".sf-list").style.display = 'none';
    });
    document.querySelector(".search-top").addEventListener('mouseleave', function() {
        document.querySelector(".sf-list").style.display = 'none';
    });

    document.querySelector('.sdb-btn-edit').addEventListener('mouseenter', function() {
        this.textContent = "Click to edit my profile";
    });
    document.querySelector('.sdb-btn-edit').addEventListener('mouseleave', function() {
        this.textContent = "edit my profile";
    });

    // AWARDS
    document.querySelector(".time-hide-1-btn").addEventListener('click', function() {
        document.querySelector(".time-hide-1").style.display = 'block';
        document.querySelector(".time-hide-11-btn").style.display = 'block';
        this.style.display = 'none';
    });

    document.querySelector(".time-hide-11-btn").addEventListener('click', function() {
        document.querySelector(".time-hide-1").style.display = 'none';
        this.style.display = 'none';
        document.querySelector(".time-hide-1-btn").style.display = 'block';
    });

    document.querySelector(".time-hide-2-btn").addEventListener('click', function() {
        document.querySelector(".time-hide-2").style.display = 'block';
        document.querySelector(".time-hide-22-btn").style.display = 'block';
        this.style.display = 'none';
    });

    document.querySelector(".time-hide-22-btn").addEventListener('click', function() {
        document.querySelector(".time-hide-2").style.display = 'none';
        this.style.display = 'none';
        document.querySelector(".time-hide-2-btn").style.display = 'block';
    });

    document.querySelector(".time-hide-3-btn").addEventListener('click', function() {
        document.querySelector(".time-hide-3").style.display = 'block';
        document.querySelector(".time-hide-33-btn").style.display = 'block';
        this.style.display = 'none';
    });

    document.querySelector(".time-hide-33-btn").addEventListener('click', function() {
        document.querySelector(".time-hide-3").style.display = 'none';
        this.style.display = 'none';
        document.querySelector(".time-hide-3-btn").style.display = 'block';
    });

    document.querySelector(".time-hide-4-btn").addEventListener('click', function() {
        document.querySelector(".time-hide-4").style.display = 'block';
        document.querySelector(".time-hide-44-btn").style.display = 'block';
        this.style.display = 'none';
    });

    document.querySelector(".time-hide-44-btn").addEventListener('click', function() {
        document.querySelector(".time-hide-4").style.display = 'none';
        this.style.display = 'none';
        document.querySelector(".time-hide-4-btn").style.display = 'block';
    });

    // MOBILE MENU OPEN
    document.querySelector(".ed-micon").addEventListener('click', function() {
        document.querySelector(".ed-mm-inn").classList.add("ed-mm-act");
    });

    // MOBILE MENU CLOSE
    document.querySelector(".ed-mi-close").addEventListener('click', function() {
        document.querySelector(".ed-mm-inn").classList.remove("ed-mm-act");
    });

    // MATERIAL SELECT BOX
    document.querySelectorAll('select').forEach(function(select) {
        M.FormSelect.init(select);
    });

    // MATERIAL COLLAPSIBLE
    document.querySelectorAll('.collapsible').forEach(function(collapsible) {
        M.Collapsible.init(collapsible);
    });

    // MATERIAL CHIP COMMON
    document.querySelectorAll('.chips').forEach(function(chip) {
        M.Chips.init(chip);
    });

    // MATERIAL CHIP PLACEHOLDER
    document.querySelectorAll('.chips-placeholder').forEach(function(chip) {
        M.Chips.init(chip, {
            placeholder: 'Enter a tag',
            secondaryPlaceholder: '+Amini (press enter)',
        });
    });

    // MATERIAL CHIP AUTO-COMPLETE
    document.querySelectorAll('.chips-autocomplete').forEach(function(chip) {
        M.Chips.init(chip, {
            autocompleteOptions: {
                data: {
                    'Apple': null,
                    'Microsoft': null,
                    'Google': null
                },
                limit: Infinity,
                minLength: 1
            }
        });
    });

    // GOOGLE MAP - SCROLL REMOVE
    document.querySelectorAll('.contact-map').forEach(function(map) {
        map.addEventListener('click', function() {
            this.querySelector('iframe').classList.add('clicked');
        });
        map.addEventListener('mouseleave', function() {
            this.querySelector('iframe').classList.remove('clicked');
        });
    });

    // SLIDER
    document.querySelectorAll('.slider').forEach(function(slider) {
        M.Slider.init(slider, {
            height: 500,
            interval: 1000
        });
    });

    // DROPDOWN
    document.querySelectorAll('.dropdown-button').forEach(function(dropdown) {
        M.Dropdown.init(dropdown, {
            inDuration: 300,
            outDuration: 225,
            constrainWidth: 400,
            hover: true,
            gutter: 0,
            belowOrigin: false,
            alignment: 'left',
            stopPropagation: false
        });
    });

    document.querySelectorAll('.dropdown-button2').forEach(function(dropdown) {
        M.Dropdown.init(dropdown, {
            inDuration: 300,
            outDuration: 225,
            constrain_width: false,
            hover: true,
            gutter: (document.querySelector('.dropdown-content').offsetWidth * 3) / 2.5 + 5,
            belowOrigin: false,
            alignment: 'left'
        });
    });
});





