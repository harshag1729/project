
  <html>

<script>

function loadPNRStatus(){
var searchN = $(‘#PNR_NUM’).val();
if(searchN !=””)
{
$.ajax
( 
{
type: “POST”, url: “getPNRStatus.php”, data:{pnrQ: searchN }, beforeSend: function()
{
$.blockUI({ css: {
border: ‘none’,
padding: ’15px’,
backgroundColor: ‘#000’,
‘-webkit-border-radius’: ’10px’,
‘-moz-border-radius’: ’10px’,
opacity: .5,
color: ‘#fff’
} });
},
success:function(htmlResp) {
$(‘div.pnrStatusLoad’).html(htmlResp);
$.unblockUI();
}
});
}
}

</script>

</html>  
        
