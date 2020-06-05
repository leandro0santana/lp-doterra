document.querySelector('.card-link').addEventListener('click', scrollTop);

function scrollTop(event) {
   event.preventDefault();
   const element = event.target;
   const id = element.getAttribute('href');
   const to = document.querySelector(id).offsetTop;

   window.scroll({
      top: to - 30,
      behavior: "smooth",
   });
}