class Header {
  constructor(header, afterEl) {
    this.header = header;
    this.afterEl = afterEl;
    this.start = this.start.bind(this);
  }

  start() {
    let headerBox = 0;
    let afterElBox = 0;

    document.addEventListener("scroll", () => {
      headerBox = this.#getCoords(this.header);
      afterElBox = this.#getCoords(this.afterEl);

      if (window.scrollY >= afterElBox.bottom) {
        this.header.classList.add("active");
        this.header.style.maxHeight = this.header.scrollHeight + "vh";
        this.afterEl.style.marginTop = 10 + "vh";
      } else {
        this.header.classList.remove("active");
        this.afterEl.style.marginTop = 0;
      }
    });
  }

  #getCoords(elem) {
    let box = elem.getBoundingClientRect();

    return {
      top: box.top + window.scrollY,
      right: box.right + window.scrollX,
      bottom: box.bottom + window.scrollY,
      left: box.left + window.scrollX,
    };
  }
}

class ModalWindow {
  constructor(props) {
    this.modalWindow = props.modalWindow;
    this.buttonOpen = props.buttonOpen;
    this.buttonClose = props.buttonClose;
    this.display = props.display === "" ? "block" : props.display;
    this.style = props.style;
    this.open = this.open.bind(this);
    this.close = this.close.bind(this);

    if (Array.isArray(this.buttonOpen)) {
      this.buttonOpen.forEach((button) =>
        button.addEventListener("click", this.open)
      );
    } else {
      this.buttonOpen.addEventListener("click", this.open);
    }

    if (Array.isArray(this.buttonClose)) {
      this.buttonClose.forEach((button) => {
        button.addEventListener("click", this.close);
      });
    } else {
      this.buttonClose.addEventListener("click", this.close);
    }
  }

  close() {
    Object.assign(this.modalWindow.style, this.style.close);
  }

  open() {
    Object.assign(this.modalWindow.style, this.style.open);
  }
}

class DropMenu {
  constructor(props) {
    this.header = props.header;
    this.menu = props.menu;
    this.select = props.select === "" || props.select === false ? false : true;
    this.toggleShow = this.toggleShow.bind(this);
    this.switchSelect = this.switchSelect.bind(this);

    if (Array.isArray(this.header)) {
      this.header.forEach((headerItem, id) => {
        headerItem.addEventListener("click", () => {
          this.toggleShow(id, true);
        });

        if (this.select === true) {
          const selectItems = this.menu[id].querySelectorAll("li");

          selectItems.forEach((item) => {
            item.addEventListener("click", () => {
              this.switchSelect(item, headerItem, id);
            });
          });
        }
      });
    } else {
      this.header.addEventListener("click", this.toggleShow);

      if (this.select === true) {
        const selectItems = this.menu.querySelectorAll("li");

        selectItems.forEach((item) => {
          item.addEventListener("click", () => {
            this.switchSelect(item, this.header, id);
          });
        });
      }
    }
  }

  toggleShow(id = 0, array = false) {
    let menuHeight = 0;

    if (array === true) {
      menuHeight = parseInt(this.menu[id].style.maxHeight);

      this.menu[id].parentElement.classList.toggle("active");

      if (isNaN(menuHeight) || menuHeight === 0) {
        this.menu[id].style.maxHeight = this.menu[id].scrollHeight + "px";
      } else {
        this.menu[id].style.maxHeight = 0 + "px";
      }
    } else {
      menuHeight = parseInt(this.menu.maxHeight);

      this.menu.parentElement.classList.toggle("active");

      if (isNaN(menuHeight) || menuHeight === 0) {
        this.menu.style.maxHeight = this.menu.scrollHeight + "px";
      } else {
        this.menu.style.maxHeight = 0 + "px";
      }
    }
  }

  switchSelect(item, headerItem, id) {
    const selectValue = headerItem.querySelector("span");

    selectValue.innerHTML = item.innerHTML;

    this.toggleShow(id, true);
  }
}

const headerDropMenu = new DropMenu({
  header: [...document.querySelectorAll(".drop-menu-title")],
  menu: [...document.querySelectorAll(".drop-menu-wrapper")],
  select: false,
});
