function menuData() {
    return {
        activeMenu: localStorage.getItem('activeMenu') || 'inicio',
        setActiveMenu(menu) {
            this.activeMenu = menu;
            localStorage.setItem('activeMenu', menu);
        }
    };
}