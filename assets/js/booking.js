//************************************************* Tour booking ***************************************/
// $('#modal_open div i').click(function () {
//     let heading = $(this).siblings().text();
//     $('#heading').text(heading)
//     $("#myModal").modal()
// })

$('.info_links').on('click','div[details]',function(){
    let tour_id = atob($(this).attr('pid'));    
    window.location = base_url+'Travel/booking/'+tour_id+'#useful_info'
})

//show and hide fill details tab on input box click
$("#booknow .sub_activity").on('click','.checked',function(){
    if ($(this).prop('checked') == true){    
        $('#fill_details').show()
    }
})

//getting and validating sub activity data from booking view
$("#booking").click(function(){
    var somethingChecked = false;
    $("input[type=checkbox]").each(function() {
      if($(this).is(':checked')) {
        somethingChecked = true;
      }
    });
    if(!somethingChecked) {
        showAlert('Please select any activity')
    }else{
        let parentId = atob($('.sub_activity div:first').attr('pid'));
        let subActivityId = [];
        let transfer = $('#transfer').val();
        let date = $('.date').val().trim();
        let adult = $('#adult').val().trim();
        let child = $('#child').val().trim();
        let infant = $('#infant').val().trim();
        if(date == ""){
            showAlert("Date should not be empty", 'danger');
            return false
        }
        if(adult == ""){
            showAlert("Adult number should not be empty", 'danger');
            return false
        }
        $("input[type=checkbox]").each(function() {
            if($(this).is(':checked')) {
                subActivityId.push($(this).parent().parent().attr('id'))
            }
          });          
        
    }

   
})

//getting selected sub Activities data from card view

let transfer = [];
let t_date = [];
let adults = [];
let childs = [];
let infants = [];
let tbalance = [];
let tour_id = '';
$('.bg_dark').on('click', 'button[book-btn]', function () {
    $('input[name="activities"]:checked').each(function () {
    ($(this).parent().parent().parent().parent().attr('selected', 'selected'))
    });
    $('tbody tr[selected="selected"]').each(function () {
        tour_id = $(this).find("td:nth-child(1)").attr('pid');
        let activity_id = $(this).find("td:nth-child(1)").attr('id');
        let transfer_status = $(this).find("td:nth-child(2) div select").val();
        let tour_date = $(this).find("td:nth-child(3) div input").val();
        let adult = $(this).find("td:nth-child(4) div input").val();
        let child = $(this).find("td:nth-child(5) div input").val();
        let infant = $(this).find("td:nth-child(6) div input").val();
        let balance = $(this).find("td:nth-child(7)").text().trim();

        if (tour_id != "" && activity_id != "" && transfer_status != "" && tour_date != "" && adult != "" && balance != "") {
            transfer.push({ [activity_id]: transfer_status });
            t_date.push({ [activity_id]: tour_date });
            adults.push({ [activity_id]: adult });
            childs.push({ [activity_id]: child });
            infants.push({ [activity_id]: infant });
            tbalance.push({ [activity_id]: balance });
        }else{
                alert("Please Fill all values")
        }


    });
    console.log(atob(tour_id))
    console.log(t_date)
    console.log(adults)
    console.log(childs)
    console.log(infants)
    console.log(tbalance)
})

