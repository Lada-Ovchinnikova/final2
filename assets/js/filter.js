let filterButton = document.getElementById("filterButton");
let filterContent = document.getElementById("filterContent");

//скрипт для отображения фильтра
filterButton.addEventListener("click",
    () => {
        filterContent.classList.toggle("filter");

    }
);