const dragableList = document.getElementById('draggable-list');
const check = document.getElementById('check');
const box = document.getElementById('box');

// console.log(dragableList);
const richPeople = [
  'Jeff',
  'Bill',
  'Mark',
  'Elon',
  'Larry',
  'Bernard',
  'Warren',
  'Carlous',
  'Ellision',
  'Ambani',
];

//store list items
const list = [];

let dragStartIndex;
createList();

//insert list items into dom
function createList() {
  [...richPeople]
    .map((a) => ({ value: a, sort: Math.random() }))
    .sort((a, b) => a.sort - b.sort)
    .map((a) => a.value)
    .forEach((person, index) => {
      //   console.log(person);
      const listItem = document.createElement('li');

      listItem.setAttribute('data-index', index);

      listItem.innerHTML = `<span class="number"> 
         ${index + 1}
         </span>
         <div class="dragable" draggable="true">
             <p class="person-name"> ${person}</p>
             <img src="./icon-cross.svg"  alt="grip"/>
         </div>
          `;

      list.push(listItem);
      dragableList.appendChild(listItem);
    });

  addEventListener;
}

function dragStart() {
  //   console.log('Event: Drag start');
  dragStartIndex = this.closest('li').getAttribute('data-index');
  console.log('dragIndex', dragStartIndex);
}
function dragEnter() {
  this.classList.add('over');
}
function dragLeave() {
  this.classList.remove('over');
}

function dragOver(e) {
  e.preventDefault();
}
function dragDrop() {
  const dragEndIndex = +this.getAttribute('data-index');
  swapItems(dragStartIndex, dragEndIndex);
  this.classList.remove('over');
}

//swap items
function swapItems(fromIndex, toIndex) {
  const itemOne = list[fromIndex].querySelector('.dragable');
  const itemTwo = list[toIndex].querySelector('.dragable');

  //   console.log(itemOne, itemTwo);
  list[fromIndex].appendChild(itemTwo);
  list[toIndex].appendChild(itemOne);
}

function addEventListener() {
  const draggable = document.querySelectorAll('.dragable');
  const dragList = document.querySelectorAll('.draggable-list li');

  draggable.forEach((draggable) => {
    draggable.addEventListener('dragstart', dragStart);
  });
  dragList.forEach((drag) => {
    drag.addEventListener('dragover', dragOver);
    drag.addEventListener('drop', dragDrop);
    drag.addEventListener('dragenter', dragEnter);
    drag.addEventListener('dragleave', dragLeave);
  });
}

check.addEventListener('click', () => {
  list.forEach((list, index) => {
    const person = list.querySelector('.dragable').textContent.trim();

    if (person !== richPeople[index]) {
      list.classList.add('wrong');
    } else {
      list.classList.remove('wrong');
      list.classList.add('right');
    }
  });
});

const contianer = list.forEach((person) => {
  return person.innerHTML;
});
box.innerHTML = contianer;
