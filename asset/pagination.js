
var table = document.getElementById("blogsTable");
var rowsPerPage = 10;
var rowCount = table.rows.length;
var tableHead = table.rows[0].firstElementChild.tagName === "TH";
var tr = [];
var i, ii, j = tableHead ? 1 : 0;
var th = tableHead ? table.rows[0].outerHTML : "";
var pageCount = Math.ceil(rowCount / rowsPerPage);

if (pageCount > 1) {
    for (i = j, ii = 0; i < rowCount; i++, ii++) {
        tr[ii] = table.rows[i].outerHTML;
    }
    table.insertAdjacentHTML("afterend", "<br><div style='margin-left: 2rem; margin-bottom: 1rem;' id='buttons'><ul class='inline-flex -space-x-px'></ul></div");
    sort(1);
}

function sort(page) {
    var rows = th,
        s = (rowsPerPage * page) - rowsPerPage;
    for (i = s; i < s + rowsPerPage && i < tr.length; i++) {
        rows += tr[i];
    }
    table.innerHTML = rows;
    document.getElementById("buttons").innerHTML = pageButtons(pageCount, page);
}

function pageButtons(pageCount, current) {
    var buttons = "";
    var disabled = "";

    // Previous Button
    // disabled = (pageCount === 1) ? "disabled" : "";
    // currentPage = (current === 1) ? 1: (current - 1);
    // // buttons += `<button onclick='sort(${current - 1})' ${disabled}>Previous</button>`;
    // buttons += `  <a href='javascript:void(0);' onclick='sort(${currentPage})'
            // 	class=" bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 ml-0 rounded-l-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>`;

    // Numbered Buttons
    for (var i = 1; i <= pageCount; i++) {
        disabled = (i === current) ? "disabled" : "";
        // buttons += `<button onclick='sort(${i})' ${disabled}>${i}</button>`;
        buttons += `<a href='javascript:void(0);' onclick='sort(${i})'
                class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 ml-0 rounded-l-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">${i}</a>`;
    }

    // Next Button
    disabled = (current === pageCount) ? "disabled" : "";
    // buttons += `<button onclick='sort(${current + 1})' ${disabled}>Next</button>`;
    buttons += `<a href='javascript:void(0);' onclick='sort(${current + 1})'
                class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 ml-0 rounded-l-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>`;

    return buttons;
}