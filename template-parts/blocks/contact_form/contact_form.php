<?php

/**
 * Form Section Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'form-section-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" values.
if (!empty($block['className'])) {
    $className = $block['className'];
}

// Load values and assign defaults.
$title = get_field('title');
$subtitle = get_field('subtitle');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div id="form">
        <?php if ($title) { ?>
            <h1><?php echo $title; ?></h1>
            <hr />
        <?php } ?>
        <p><?php echo $subtitle; ?></p>
        <?php echo do_shortcode('[contact-form-7 id="212" title="Contact Form"]'); ?>
    </div>
</div>

<script>
    (function formatSelectItems() {
        // Prebuit Select Script
        var x, i, j, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        for (i = 0; i < x.length; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < selElmnt.length; j++) {
                /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function(e) {
                    /*when an item is clicked, update the original select box,
        and the selected item:*/
                    var y, i, k, s, h;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < s.length; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            for (k = 0; k < y.length; k++) {
                                y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function(e) {
                /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }

        function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
  except the current select box:*/
            var x,
                y,
                i,
                arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            for (i = 0; i < y.length; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i);
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < x.length; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }
        /*if the user clicks anywhere outside the select box,
then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);


        // Set Default Select Values Based on URL
        const service = document.querySelector('.service-needed').parentNode
        const serviceSelect = service.querySelector('.select-selected')
        const selectItems = service.querySelector('.select-items')

        const setDropdown = (type) => {
            serviceSelect.innerText = type
            Array.from(selectItems.children).map((elem) => {
                if (elem.innerText === type) {
                    elem.classList.add("same-as-selected")
                }
            })
        }

        if (window.location.href.includes('maintenance')) {
            setDropdown("Maintenance")
        } else if (window.location.href.includes('installation')) {
            setDropdown("Installation")
        } else if (window.location.href.includes('repair')) {
            setDropdown("Repair")
        }

        // Remove Footer Popup on Form Interaction 
        const form = document.getElementById('form');

        if (form) {
            const formClickables = [
                ...Array.from(form.querySelectorAll('input')), 
                ...Array.from(form.querySelectorAll('.custom-select')), 
                ...Array.from(form.querySelectorAll('.select-selected')),
                form.querySelector('textarea')
            ]

            const addListener = (elem) => {
                elem.addEventListener("click", () => {
                    // Do not use cached selector as footer hasn't loaded yet
                    if (document.getElementById('mobile-footer-cta')){
                        document.getElementById('mobile-footer-cta').remove()
                    }
                })
            }

            formClickables.map((elem) => {
                addListener(elem)
            })
        }

    })();
</script>