
function ListTop(){
    const div = document.getElementById("apiHtml");

    fetch("https://api.jikan.moe/v3/top/anime/1")
    .then(response => response.json())
    .then(dataOfAnime =>{
        for(anime of dataOfAnime.top){
            console.log(anime);
            div.innerHTML+=`
            
            <div class="justify-content-center container expnationBoxStyle ">
                <div class="row  ">
                    <div class="col-md-3  OpacityHalf  imgProfile3">
                        <a href="${anime.url}"><img src="${anime.image_url}"></a>
                    </div>
                    <div class=" card OpacityHalf text-white col-md-4">
                        <div class="card-body cardTextStyle ">
                            <h4 class="card-title">${anime.title}</h4>
                            <table>
                                <tr>
                                    <td>Rank:</td>
                                    <td>${anime.rank}</td>
                                </tr>
                                <tr>
                                    <td>Bölüm Sayısı:&nbsp</td>
                                    <td>${anime.episodes}</td>
                                </tr>
                                <tr>
                                    <td>Score:</td>
                                    <td>${anime.score}/10</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            `
        }
    })
       
        
}

//https://api.jikan.moe/v3/top/type/page/subtype

ListTop();