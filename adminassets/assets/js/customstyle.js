$(document).ready(function(){
    $('.deleteTour').click(function(){
        const id= $('.deleteTour').attr('attr')
        // alert(atob(id));
        $.post( base_url+"Admin/deleteTourpackage", {t_id:atob(id)} ,
        function(data, status){
            // alert("Alert!: " + data + "\nStatus: " + status);
            alert("Alert!: " + data );
				setTimeout(() => {
					location.reload();
				}, 250);

          });
    });  
});