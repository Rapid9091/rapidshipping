let slide_container = document.getElementById("review-sec");
let parent = document.getElementById("arrow-mid");
let scroll_size = parent.clientWidth / 2;

function left() {
  let c_position = slide_container.style.left;
  c_position = c_position.replace("-", "");
  c_position = c_position.replace("px", "");

  if (c_position == "") {
    c_position = scroll_size;
  } else {
    c_position = parseFloat(c_position);
    if (
      c_position <
      slide_container.clientWidth - parseFloat(parent.clientWidth)
    ) {
      c_position = c_position + scroll_size;
    }
  }

  slide_container.style.left = -c_position + "px";
  slide_container.style.transition = "all 0.3s";
}

function right() {
  let c_position = slide_container.style.left;
  c_position = c_position.replace("-", "");
  c_position = c_position.replace("px", "");

  if (c_position != "" && c_position > scroll_size - 50) {
    c_position = parseFloat(c_position);
    c_position = c_position - scroll_size;
  }

  slide_container.style.left = -c_position + "px";
  slide_container.style.transition = "all 0.3s";
}

// const slider = document.getElementById("review-sec")
// const slider_item = document.getElementsByClassName("review-sec")
// var position = 0;
// var scroll_width = 0;
// var max_slide = 5;

// function right() {
//     position++;
//     if (position <= max_slide) {
//         let widht = slider_item[position - 1].clientWidth;
//         scroll_width += widht
//         slider.scroll(scroll_width, 0);
//     } else {
//         position--;
//     }

// }

// function left() {
//     position--;
//     if (position >= 0) {
//         let widht = slider_item[position].clientWidth;
//         scroll_width -= widht
//         slider.scroll(scroll_width, 0)

//     } else {
//         position++;
//     }
// }
