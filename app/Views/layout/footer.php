    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      const sampul = document.querySelector('#sampul');
      const imgPreview = document.querySelector('#img-preview');

      sampul.addEventListener('change', function() {
        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(this.files[0]);

        fileSampul.onload = function(e) {
          imgPreview.src = e.target.result;
        }
      })
    </script>
  </body>
</html>