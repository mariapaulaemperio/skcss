document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.nav-bar1 a');
    const container = document.querySelector('.content-container');

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            const index = Array.from(targetElement.parentNode.children).indexOf(targetElement);
            container.style.transform = `translateX(-${index * 100}vw)`;
        });
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.nav-bar1 a');
    const container = document.querySelector('.content-container');

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            // Remove active class from all links
            links.forEach(link => link.parentNode.classList.remove('active'));
            // Add active class to the clicked link
            this.parentNode.classList.add('active');

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            const index = Array.from(targetElement.parentNode.children).indexOf(targetElement);
            container.style.transform = `translateX(-${index * 100}vw)`;
        });
    });
});

  var accordions = document.querySelectorAll('.accordion');

  accordions.forEach(function(accordion) {
    accordion.addEventListener('click', function() {
      this.classList.toggle('active');
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + 'px';
      }
    });
  });