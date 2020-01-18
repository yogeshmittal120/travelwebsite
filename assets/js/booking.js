//************************************************* Tour booking ***************************************/
$('#modal_open div i').click(function () {
    let heading = $(this).siblings().text();
    $('#heading').text(heading)
    $("#myModal").modal()
})

//getting selected sub Activities data

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
