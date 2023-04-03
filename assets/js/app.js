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

    console.log(props);

    if (Array.isArray(this.buttonOpen)) {
      this.buttonOpen.forEach((button) =>
        button.addEventListener("click", this.open.bind(this))
      );
    } else {
      this.buttonOpen.addEventListener("click", this.open.bind(this));
    }
    this.buttonClose.addEventListener("click", this.close.bind(this));
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
    this.switch = this.switch.bind(this);

    if (Array.isArray(this.header)) {
      this.header.forEach((item, id) => {
        item.addEventListener("click", () => {
          this.switch(id, true);
        });
      });
    } else {
      this.header.addEventListener("click", this.switch);
    }
  }

  switch(id = 0, array = false) {
    let menuHeight = 0;

    if (array === true) {
      menuHeight = parseInt(this.menu[id].style.maxHeight);

      if (isNaN(menuHeight) || menuHeight === 0) {
        this.menu[id].style.maxHeight = this.menu[id].scrollHeight + "px";
      } else {
        this.menu[id].style.maxHeight = 0 + "px";
      }
    } else {
      menuHeight = parseInt(this.menu.maxHeight);

      if (isNaN(menuHeight) || menuHeight === 0) {
        this.menu.style.maxHeight = this.menu.scrollHeight + "px";
      } else {
        this.menu.style.maxHeight = 0 + "px";
      }
    }
  }
}

const headerDropMenu = new DropMenu({
  header: [...document.querySelectorAll(".drop-menu-title")],
  menu: [...document.querySelectorAll(".drop-menu-wrapper")],
});
