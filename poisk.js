window.addEventListener("DOMContentLoaded", () => {
    document.body.classList.remove("load");

    const postItems = document.querySelectorAll(".post div");

    document.querySelector("#post").oninput = function() {
        const searchText = this.value.trim().toLowerCase();

        if (searchText) {
            postItems.forEach(item => {
                if (item.querySelector("span").textContent.toLowerCase().indexOf(searchText) != -1) {

                    item.classList.remove("hide");
                } else {
                    item.classList.add("hide");
                };
            });
        } else {
            postItems.forEach(item => {
                item.classList.remove("hide");
            });
        };
    };
});

// function insertMark(string,pos,len){
//     // hello world
//     // hello <mark>wo</mark>rld
//     // hello<mark>+wo+</mark>+rld
//     return string.slice(0,pos)+'<mark>'+string.slice(pos,pos+len)+'</mark>'+string.slice(pos+len);
// }
// elem,textContent.toLowerCase().indexOf(val.toLowerCase()) != -1