const popup = document.getElementById("mainPopup");

const users = {
    "0" : {"name" : "Elif Yılmaz", "username" : "elifyilmaz", "img" : "icon2", "text" : "Merhabalar ben Elif. Biyomedikal Mühendisliği 1. sınıf öğrencisiyim."},
    "1" : {"name" : "Güven Zengin", "username" : "mguvenzengin", "img" : "icon6", "text" : "Merhabalar ben Güven. Makine Mühendisliği 4. sınıf öğrencisiyim."},
    "2" : {"name" : "Halim Aslıyüksek", "username" : "halimaslyk", "img" : "icon8", "text" : "Merhabalar ben Halim. Yazılım Mühendisliği 3. sınıf öğrencisiyim."},
    "3" : {"name" : "Enes Kılıç", "username" : "eneskilic", "img" : "icon7", "text" : "Merhabalar ben Enes. Yazılım Mühendisliği 3. sınıf öğrencisiyim."},
    "4" : {"name" : "Ebrar Aslan", "username" : "ebraraslan", "img" : "icon5", "text" : "Merhabalar ben Ebrar. Havacılık ve Uzay Mühendisliği 1. sınıf öğrencisiyim."},
}


function showCard(event) {
    const user = users[event.id];
    popup.innerHTML = 
    `
    <div class="modal fade text-dark" id="${user.username}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="container mt-4 mb-4 d-flex justify-content-center"> 
                    <div class="cardd p-4"> 
                    <div class=" image d-flex flex-column justify-content-center align-items-center"> 
                        <button class="btn btn-secondary rounded-circle"> 
                        <img src="./images/${user.img}.png" height="100" width="100" style="border-radius: 360px;" />
                        </button> 
                        <span class="name mt-3">${user.name}</span> 
                        <span class="idd">@${user.username}</span>
                        <div class="d-flex flex-column justify-content-center align-items-center mt-3"> 
                        <div class="text mt-3"> 
                            <span>${user.text} <br><br> Bu fikirleri görmek bile heyecanlanmama yetti. Okulumuz için çok önemi bir adım olacak.</span> 
                        </div> 
                        <div class="gap-3 mt-5 icons d-flex justify-content-between align-items-center"> 
                            <span><i class="fa-brands fa-instagram"></i></span> 
                            <span><i class="fa-brands fa-twitter"></i></span> 
                            <span><i class="fa-brands fa-linkedin-in"></i></span>
                        </div> 
                            <div class=" px-2 rounded mt-4 date "> <span class="join">Joined Oct,2023</span> </div> 
                        </div> 
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    `
}