<div id="react-calendar"></div>
<script src="{{ mix('/my-react-calendar/src/app.js') }}"></script>
<script>
  const element = document.getElementById('react-calendar');
  ReactDOM.render(<Calendar />, element);
</script>