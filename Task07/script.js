var images = ["c4.jpg", "c5.jpg", "c6.jpg", "1.jpeg", "2.jpeg", "3.jpeg", "4.jpg", "5.jpg"]; // Replace with your image URLs

    function openModal(imageUrl) {
      var modal = document.getElementById("myModal");
      var modalImage = document.getElementById("modalImage");
      var modalPreview = document.getElementById("modalPreview");

      modalImage.src = imageUrl;
      modal.style.display = "block";

      modalPreview.innerHTML = ""; // Clear previous previews

      for (var i = 0; i < images.length; i++) {
        var previewImage = document.createElement("img");
        previewImage.src = images[i];
        previewImage.alt = "Preview Image " + (i + 1);
        previewImage.classList.add("modal-preview-image");

        if (images[i] === imageUrl) {
          previewImage.classList.add("active");
        }

        previewImage.setAttribute("onclick", "changeImage('" + images[i] + "')");
        modalPreview.appendChild(previewImage);
      }
    }

    function changeImage(imageUrl) {
      var modalImage = document.getElementById("modalImage");
      var previewImages = document.getElementsByClassName("modal-preview-image");

      for (var i = 0; i < previewImages.length; i++) {
        if (previewImages[i].src === imageUrl) {
          previewImages[i].classList.add("active");
        } else {
          previewImages[i].classList.remove("active");
        }
      }

      modalImage.src = imageUrl;
    }

    function closeModal() {
      var modal = document.getElementById("myModal");
      modal.style.display = "none";
    }