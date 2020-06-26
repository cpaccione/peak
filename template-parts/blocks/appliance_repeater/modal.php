<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span id="modalClose" class="close">&times;</span>
        <div class="modal-icon-wrap">
            <div class="modal-icon">
                <img class="modal-app-icon" src="" alt="Peak Icon">
            </div>
            <p class="modal-icon-name"></p>
            <p class="intro-text"></p>
            <div class="modal-logos"></div>
            <p class="small-text">Don’t see your brand? No worries, contact us and we’ll see if we can service your appliance.</p>
            <hr>
            <a class="button" href="/schedule-service">Schedule Service</a>
        </div>
    </div>

</div>


<script>
    (function() {
        const modal = document.querySelector('.modal')
        const modalClose = document.querySelector('#modalClose')
        const modalIcon = document.querySelector('.modal-app-icon')
        const modalTitle = document.querySelector('.modal-icon-name')
        const modalText = document.querySelector('.intro-text')
        const modalLogos = document.querySelector('.modal-logos')

        // Icon Click Listeners
        Array.from(document.querySelectorAll('.modal-button')).map((elem, index) => {
            elem.addEventListener('click', (e) => {
                modalClick(e)
            })
        })

        // Modal Click Listener
        window.addEventListener("click", (e) => {
            if (e.target === modal || e.target === modalClose) {
                closeModal()
            }
        })

        // Open Modal
        const modalClick = (e) => {
            const index = e.target.dataset.index;
            const iconSrc = document.getElementById(`appliance-icon-${index}`).src;
            const title = document.getElementById(`appliance-icon-title-${index}`).innerText
            const text = document.getElementById(`popup-text-${index}`).dataset.text;
            const logos = Array.from(document.querySelectorAll(`.popup-logos-${index}`));

            // Dynamically Populate Modal
            setContent(iconSrc, title, text, logos)

            // Show Modal
            modal.classList.add('modal-show')
        }

        // Close Modal
        const closeModal = () => {
            // Hide Modal
            modal.classList.remove('modal-show')

            // Depopulate Modal
            setContent('', '', '', null)
        }

        // Modal Content Helper
        const setContent = (src, title, text, logos) => {
            modalIcon.src = src;
            modalTitle.innerText = title;
            modalText.innerText = text;
            logos ? logos.map((logo) => {
                modalLogos.innerHTML += `<div class="modal-logo" style="background-image: url('${logo.dataset.src}')"></div>`
            }) : modalLogos.innerHTML = ''
        }
    })();
</script>