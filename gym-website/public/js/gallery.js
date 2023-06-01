let ParentGalleryElm = document.querySelectorAll(".col-md-6");
let Elementd = document.querySelectorAll(".lightbox");
const ImageViewer = () => {
    let IsAppend = false;
    let text='View'
    for (let j = 0; j < Elementd.length; j++) {
        Elementd[j].addEventListener("mouseover", function () {
            if (!IsAppend) {
                Elementd[j].innerHTML +=
                    '<div class="img-show"><h3 id="viewer-text">' +
                    text +
                    "</h3></div>";
                IsAppend = true;
            }
        });
        Elementd[j].addEventListener("mouseleave", function () {
            if (IsAppend) {
                Elementd[j].querySelector(".img-show").remove();
                IsAppend = false;
            }
        });
        for (let i = 0; i < ParentGalleryElm.length; i++) {
            ParentGalleryElm[i].addEventListener("click", function () {
                if(!this.classList.contains("img-active")){
                    text='Close'
                }else{
                    text='View'
                }
                if (!this.classList.contains("img-active")) {
                    // Remove 'img-active' class from all elements
                    for (let j = 0; j < ParentGalleryElm.length; j++) {
                        ParentGalleryElm[j].classList.remove("img-active");
                        ParentGalleryElm[j].style.display = "none";
                    }
        
                    // Add 'img-active' class to the clicked element
                  
                    this.classList.add("img-active")
                    this.style.display = "block";
                } else {
                    // Remove 'img-active' class from the clicked element
                    this.classList.remove("img-active");
                    this.style.display = "";
                 
                    for (let j = 0; j < ParentGalleryElm.length; j++) {
                        ParentGalleryElm[j].style.display = "block";
                    }
                }
            });
        }
    }
};
 ImageViewer();
