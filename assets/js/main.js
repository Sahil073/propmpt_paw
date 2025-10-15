document.addEventListener('DOMContentLoaded', function () {
  const track = document.querySelector('.services-track');
  if (track) {
    const items = document.querySelectorAll('.service-box');
    const prevBtn = document.getElementById('prevService');
    const nextBtn = document.getElementById('nextService');

    let index = 0;
    let itemWidth = items[0].offsetWidth + 20;

    const firstClone = items[0].cloneNode(true);
    const secondClone = items[1].cloneNode(true);
    const lastClone = items[items.length-1].cloneNode(true);
    const secondLastClone = items[items.length-2].cloneNode(true);

    track.appendChild(firstClone);
    track.appendChild(secondClone);
    track.insertBefore(lastClone, items[0]);
    track.insertBefore(secondLastClone, items[0]);

    const allItems = document.querySelectorAll('.service-box');

    index = 2;
    track.style.transform = `translateX(-${index * itemWidth}px)`;

    function getVisibleCount() {
      if(window.innerWidth >= 992) return 3;
      if(window.innerWidth >= 768) return 2;
      return 1;
    }

    function updateCarousel() {
      itemWidth = allItems[0].offsetWidth + 20;
      track.style.transition = 'transform 0.5s ease';
      track.style.transform = `translateX(-${index * itemWidth}px)`;
    }

    function next() {
      index++;
      updateCarousel();
      const visible = getVisibleCount();
      setTimeout(() => {
        if(index >= allItems.length - visible) {
          track.style.transition = 'none';
          index = 2;
          track.style.transform = `translateX(-${index * itemWidth}px)`;
        }
      }, 500);
    }

    function prev() {
      index--;
      updateCarousel();
      const visible = getVisibleCount();
      setTimeout(() => {
        if(index < 2) {
          track.style.transition = 'none';
          index = allItems.length - visible - 2;
          track.style.transform = `translateX(-${index * itemWidth}px)`;
        }
      }, 500);
    }

    if (prevBtn && nextBtn) {
      prevBtn.addEventListener('click', prev);
      nextBtn.addEventListener('click', next);
      setInterval(next, 3000);
    }

    window.addEventListener('resize', updateCarousel);
  }

  document.getElementById('currentYear').textContent = new Date().getFullYear();
});
