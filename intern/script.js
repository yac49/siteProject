document.addEventListener("DOMContentLoaded", function () {
  var infoList = document.getElementById("infoList");
  var dataDisplay = document.getElementById("dataDisplay");

  // Determine the selectedInfo based on the URL parameter
  var urlParams = new URLSearchParams(window.location.search);
  var selectedInfo = urlParams.get("item") || "info1";

  showData(selectedInfo);

  infoList.addEventListener("click", function (event) {
    var listItems = infoList.getElementsByTagName("li");

    for (var i = 0; i < listItems.length; i++) {
      listItems[i].classList.remove("selected");
    }

    if (event.target.tagName === "LI") {
      // Add a class to highlight the selected info
      event.target.classList.add("selected");

      // Get the info value from the selected LI's onclick attribute
      var infoValue = event.target
        .getAttribute("onclick")
        .match(/'([^']+)'/)[1];

      // Update the URL parameter without reloading the page
      history.pushState({}, "", "?item=" + infoValue);
    }
  });
});

function getInfoFile(info) {
  if (info.startsWith("info3Option")) {
    // For info3 and its options
    return "info3.html";
  } else if (info.startsWith("info")) {
    // For info1 and info2
    return info + ".html";
  }
}

function showData(info) {
  // Fetch content from the corresponding HTML file
  var contentFile = getInfoFile(info);

  fetch(contentFile)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.text();
    })
    .then((data) => {
      // Display the fetched content in the dataDisplay div
      dataDisplay.innerHTML = data;

      // Show the specific option if applicable
      showSpecificOption(info);
      updateInfoTitle(info);
      updateOpTitle(info);
    })
    .catch((error) => console.error("Error loading content:", error));
}

function showSpecificOption(info) {
  // Show the specific option based on the info parameter
  if (info.startsWith("info3Option")) {
    var specificParagraphId = "info3Option" + info.charAt(info.length - 1);
    var specificParagraph = document.getElementById(specificParagraphId);
    if (specificParagraph) {
      // Hide all other paragraphs
      var allParagraphs = document.querySelectorAll("#dataDisplay p");
      allParagraphs.forEach((paragraph) => {
        paragraph.style.display = "none";
      });

      // Display the specific paragraph
      specificParagraph.style.display = "block";
    } else {
      console.error("Specific paragraph not found for:", info);
    }
  }
}

function updateInfoTitle(info) {
  // Update the h3 content based on the selected LI
  var infoTitle = document.getElementById("infoTitle");

  if (infoTitle) {
    infoTitle.textContent = getInfoLabel(info);
  }
}

function updateOpTitle(info) {
  // Update the h3 content based on the selected LI
  var selOpTitle = document.getElementById("selOp");

  if (selOpTitle) {
    selOpTitle.textContent = getInfoLabel(info);
  }
}

function getInfoLabel(info) {
  // Get the label for the given info
  var labelMap = {
    info1: "劇情組織，編號。",
    info2: "老婆風情群發反。",
    info3Option1: "一身開發者大會。",
    info3Option2: "理由房產產業經。",
    info3Option3: "國有採用，主演。",
    info3Option4: "刪除許可過程氣。",
    info3Option5: "反映幹什麼，品。",
    info3Option6: "設定媽媽課堂一。",
    info3Option7: "理解另一，飯店。",
  };

  return labelMap[info] || "";
}
function openFile(filePath) {
  window.open(filePath, "_blank");
}
