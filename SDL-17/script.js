document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            // Filter items
            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.classList.contains(filterValue)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Modal functionality
    const imageModal = document.getElementById('imageModal');
    if (imageModal) {
        imageModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const imgSrc = button.getAttribute('data-img');
            const title = button.getAttribute('data-title');
            const description = button.getAttribute('data-desc');
            
            // Update the modal's content
            const modalTitle = imageModal.querySelector('.modal-title');
            const modalImage = imageModal.querySelector('#modalImage');
            const modalDescription = imageModal.querySelector('#modalDescription');
            const downloadBtn = imageModal.querySelector('#downloadBtn');
            
            modalTitle.textContent = title;
            modalImage.src = imgSrc;
            modalImage.alt = title;
            modalDescription.textContent = description;
            downloadBtn.href = imgSrc;
            downloadBtn.download = title.toLowerCase().replace(/\s+/g, '-') + '.jpg';
        });
    }
    
    // Lightbox effect for images
    const viewButtons = document.querySelectorAll('.view-btn');
    viewButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            // Bootstrap modal handles the rest via data attributes
        });
    });
});
