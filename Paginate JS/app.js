const Paginate = document.querySelector('.paginate_nav');
const list = document.querySelector('.listItem-container');
const prev = document.querySelector('#prev');

let currentPage = 1;
const postPerPage = 10;

async function mainFunction() {
  const fetchpost = async () => {
    try {
      const data = await fetch('https://jsonplaceholder.typicode.com/posts');
      const response = await data.json();
      return response;
    } catch (e) {
      console.log(e.message);
    }
  };
  const pageFunction = async () => {
    const pages = await fetchpost();
    let pageNumbers = ['prev'];
    for (let i = 1; i <= Math.ceil(pages.length / postPerPage); i++) {
      pageNumbers.push(i);
    }
    pageNumbers.push('next');
    let numbers = pageNumbers
      .map((no) => {
        return `
        <li class="page-item">
        <button class="page-link">${no}</button>
      </li>`;
      })
      .join(' ');
    Paginate.innerHTML = numbers;

    const paginateButton = document.querySelectorAll('.page-item');

    const data = await fetchpost();

    paginateButton.forEach((paginate) => {
      paginate.addEventListener('click', (e) => {
        let pageNo;
        if (
          e.target.firstChild.textContent !== 'prev' &&
          e.target.firstChild.textContent !== 'next'
        ) {
          pageNo = e.target.textContent;
          currentPage = parseInt(pageNo);
        }
        if (e.target.firstChild.textContent === 'prev') {
          currentPage -= 1;
          if (currentPage < 1) {
            currentPage = 1;
            return;
          }
        }
        if (e.target.firstChild.textContent === 'next') {
          currentPage += 1;
          if (currentPage > Math.ceil(pages.length / postPerPage)) {
            currentPage = Math.ceil(pages.length / postPerPage);
            return;
          }
        }
        console.log(currentPage);

        let indexOfLast = currentPage * postPerPage;
        let indexOfFirst = indexOfLast - postPerPage;
        let currentPosts;

        currentPosts = data.slice(indexOfFirst, indexOfLast);

        list.innerHTML = currentPosts
          .map((item) => {
            return `<li class="list-group-item">
          ${item.title}
        </li>`;
          })
          .join(' ');
      });
    });
  };

  pageFunction();

  window.addEventListener('DOMContentLoaded', async () => {
    const data = await fetchpost();
    const ContentLoadPost = data.slice(0, 10);
    list.innerHTML = ContentLoadPost.map((item) => {
      return `<li class="list-group-item">
    ${item.title}
  </li>`;
    }).join(' ');
  });
}

mainFunction();
