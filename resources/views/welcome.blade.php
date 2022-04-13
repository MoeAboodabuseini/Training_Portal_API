<script>
     var x =
    fetch('http://127.0.0.1:8000/api/isCompany/ahgdyuppppp/12345665')
	.then(response => response.json())
	.then(response => localStorage.setItem('isCompany',JSON.stringify(response) ))
	.catch(err => console.error(err));
      let isCompany = Number([JSON.parse(localStorage.getItem('isCompany')).data]);
      localStorage.removeItem('isCompany');
      if(isCompany===1){
          console.log('yes');
      }else{
        console.log('no')
      }
      console.log(x.then());
</script>