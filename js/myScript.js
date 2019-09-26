$(document).ready(function(){
  $(".izbrisi").click(function(e){
    e.preventDefault(); // NEMOJ DA RADIS SVOJE PODRAZUMEVANO PONASANJE
    var idPost = this.dataset.mojidpost; // 5 //Taj konkretan tag na koji se kliknulo

    this.parentElement.parentElement.style.display = "none";
    var pResult = document.getElementById("result_operation");

    $.ajax('models/post/izbrisi_post.php?id='+idPost, {
      method: "GET",
      dataType: "json", //xml | html | script | text
      success: function(pristigliPodaci, statusniTekst, rezultatObj) {
        
        if(rezultatObj.status === 200) {
          pResult.innerHTML = pristigliPodaci.message;
        }
      },
      error: function(greska) {
        pResult.innerHTML = greska.message;
      }
    });
  });

  $(".izmeni").click(function(e){
    e.preventDefault(); 
    var idPost = this.dataset.idpost;

    $.ajax('models/post/dohvati_post.php?id='+idPost, {
      method: "GET",
      dataType: "json", //xml | html | script | text
      success: function(pristigliPodaci, statusniTekst, rezultatObj) {
        
        if(rezultatObj.status === 200) {
          document.getElementById("tbNaslov").value = pristigliPodaci.naslov;
          document.getElementById("tbMaliNaslov").value = pristigliPodaci.mali_naslov;
          document.getElementById("taTekst").value = pristigliPodaci.tekst;
          document.getElementById("idPost").value = pristigliPodaci.idPost;
          document.getElementById("btnSubmitPost").innerText = "Update";
          document.getElementById("contactForm").setAttribute("action","models/post/izmeni_post.php");
        }
      },
      error: function(greska) {
        console.error(greska);
      }
    });
  });
});