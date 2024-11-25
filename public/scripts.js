$(document).ready(function() {
    // Function to get query parameters
    function getQueryParams() {
      const params = new URLSearchParams(window.location.search);
      return {
        arrivalDate: params.get('arrivalDate'),
        departureDate: params.get('departureDate')
      };
    }
   
    const { arrivalDate, departureDate } = getQueryParams();
  
    // Initialize the calendar
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next,today',
        center: 'title',
        right: 'month,list'
      },
      defaultView: 'month',
      editable: true,
      height: 'parent',
      contentHeight: 'auto',
      validRange: {
        start: new Date().toISOString().split("T")[0], // Allow today and future dates
      },
      events: [],
      // Callback to render events
      eventRender: function(event, element) {
        // Apply red background color to the event
        element.css('background-color', 'red');
      },
      // Callback to render the days
      dayRender: function(date, cell) {
        // Check if the current date is today
        const today = new Date();
        if (date.isSame(today, 'day')) {
          cell.css('background-color', 'rgba(255, 0, 0, 0.1)'); // Make the background of today transparent
        }
      }
    });
  
    // Check if arrivalDate and departureDate are defined and valid
    if (arrivalDate && departureDate) {
      const eventTitle = `Booking from ${arrivalDate} to ${departureDate}`;
      const startDate = moment(arrivalDate, 'YYYY-MM-DD', true);
      const endDate = moment(departureDate, 'YYYY-MM-DD', true).add(1, 'day'); // Include the last day
  
      // Log to check if the dates are correct
      console.log("Start Date:", startDate.format('YYYY-MM-DD'));
      console.log("End Date:", endDate.format('YYYY-MM-DD'));
  
      // Check if the parsed dates are valid
      if (startDate.isValid() && endDate.isValid()) {
        $('#calendar').fullCalendar('renderEvent', {
          title: eventTitle,
          start: startDate.format('YYYY-MM-DD'),
          end: endDate.format('YYYY-MM-DD'),
          allDay: true // Ensure the event spans the entire day
        }, true);
      } else {
        console.error('Invalid date format');
      }
    } else {
      console.error('Arrival and/or departure date not found in URL');
    }
  });
   // Slider functionality
   let currentSlide = 0;
   const slides = document.querySelectorAll('.room__card');
   const totalSlides = slides.length;
   const slider = document.querySelector('.slider');
   let slideWidth = slider.clientWidth;
  
   const gradients = [
     "linear-gradient(120deg, rgb(39, 0, 148, 0.678) 10%, rgb(110, 197, 255, 0.3) 30%, rgb(0, 43, 136, 0.3) 90%)",
     "linear-gradient(120deg, rgb(17, 24, 129, 0.678) 10%, rgba(0, 147, 245, 0.3) 30%,rgba(4, 134, 255, 0.432)90%)",
     "linear-gradient(120deg, rgba(14, 187, 255, 0.678) 10%, rgba(2, 5, 177, 0.3) 30%,rgba(4, 0, 219, 0.555)90%)"
   ];
   const backgroundImages = [
     "url('Main PICTURE.jpg')",
     "url('Main PICTURE.jpg')",
     "url('Main PICTURE.jpg')"
   ];
   function showSlide(index) {
     const slidesContainer = document.querySelector('.slides');
     slidesContainer.style.transform = `translateX(-${index * slideWidth}px)`;
     document.body.style.background = `${gradients[index]}, ${backgroundImages[index]}`;
     document.body.style.backgroundSize = 'cover';
     document.body.style.backgroundPosition = 'center';
     document.body.style.backgroundAttachment = 'fixed';
   }
  
   function nextSlide() {
     currentSlide = (currentSlide + 1) % totalSlides;
     showSlide(currentSlide);
   }
  
   function prevSlide() {
     currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
     showSlide(currentSlide);
   }
  
   // Initialize the first slide
   showSlide(currentSlide);
  
   // Recalculate slide width on window resize
   window.addEventListener('resize', () => {
     slideWidth = slider.clientWidth;
     showSlide(currentSlide);
   });
  
  
   // Ensure the calendar is re-rendered correctly on resize
   $(window).resize(function() {
     $('#calendar').fullCalendar('render');
   });
   function direct() {
     var selectElement = document.getElementById("transfer");
     var selectedValue = selectElement.value;
   
     if (selectedValue) {
         location.href = selectedValue;
     }
   }
   function submitCalendar() {
     // Action to take when the button is clicked
      window.location.href = 'perso.html'
  }
  document.addEventListener("DOMContentLoaded", function() {
    // Select all buttons with the class 'butt' (for suite selection)
    document.querySelectorAll('.butt').forEach(button => {
      button.addEventListener('click', function() {
        // Toggle the 'selected' class on the clicked button
        if (this.classList.contains('selected')) {
          this.classList.remove('selected'); // Deselect the button
        } else {
          // Deselect any other selected buttons
          document.querySelectorAll('.butt').forEach(btn => btn.classList.remove('selected'));
  
          // Select the current button
          this.classList.add('selected');
          
          // Extract room details from the button's value and show an alert
          const roomDetails = this.value.split(',');
          alert(`Selected Room: ${roomDetails[0]}, Price: $${roomDetails[1]}`);
        }
      });
    });
  
    // Select all individual room buttons with the class 'room-btn'
    document.querySelectorAll('.room-btn').forEach(button => {
      button.addEventListener('click', function() {
        if (this.classList.contains('selected')) {
          this.classList.remove('selected');
        } else {
          document.querySelectorAll('.room-btn').forEach(btn => btn.classList.remove('selected'));
          this.classList.add('selected');
          
          const roomNumber = this.dataset.roomNumber;
          const roomType = this.dataset.roomType;
    
          localStorage.setItem('selectedRoomNumber', roomNumber);
          localStorage.setItem('selectedRoomType', roomType);
        }
      });
    });
  });
  function checkAvailability() {
    const arrivalDate = document.getElementById('arrivalDate').value;
    const departureDate = document.getElementById('departureDate').value;
  
    if (arrivalDate && departureDate) {
        const url = new URL('perso.html', window.location.origin);
        url.searchParams.set('arrivalDate', arrivalDate);
        url.searchParams.set('departureDate', departureDate);
  
        window.location.href = url.toString();
    } else {
        alert('Please enter both arrival and departure dates.');
    }
  }

  
  document.querySelectorAll('.butt').forEach(button => {
    button.addEventListener('click', function() {
      const roomDetails = this.value.split(',');
      const roomType = roomDetails[0];
      const roomRate = roomDetails[1];
      
      // Get the selected room number
      const roomNumber = localStorage.getItem('selectedRoomNumber');
      
      // Redirect to the booking form with room details as URL parameters
      window.location.href = `/booking/form?room_type=${roomType}&room_rate=${roomRate}&room_number=${roomNumber}`;
    });
  });
  
  document.querySelectorAll('.room-btn').forEach(button => {
    button.addEventListener('click', function() {
      const roomNumber = this.dataset.roomNumber;
  
      localStorage.setItem('selectedRoomNumber', roomNumber);
    });
  });
  
  
  