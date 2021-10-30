const fill = document.querySelector('.fill');
const empty = document.querySelectorAll('.empty');

//* fill event listeners

fill.addEventListener('dragstart', dragStart);
fill.addEventListener('dragend', dragEnd);

empty.forEach((emptyBox) => {
  emptyBox.addEventListener('dragover', dragOver);
  emptyBox.addEventListener('dragenter', dragEnter);
  emptyBox.addEventListener('dragleave', dragLeave);
  emptyBox.addEventListener('drop', drop);
});

// drag api events
function dragStart() {
  this.classList.add('hold');

  setTimeout(() => this.classList.add('hide'), 100);
}
function dragEnd() {
  this.classList.remove('hide');
}

function dragOver(e) {
  e.preventDefault();
}
function dragEnter() {
  this.classList.add('hovered');
}
function dragLeave() {
  this.classList.remove('hovered');
}
function drop() {
  this.classList.remove('hold');
  this.classList.remove('hovered');
  this.appendChild(fill);
}
