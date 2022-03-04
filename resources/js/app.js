import Alpine from 'alpinejs';
import persist from '@alpinejs/persist'

/**
 * Limit focus to focusable elements inside `element`
 * @param {HTMLElement} element - DOM element to focus trap inside
 * @return {Function} cleanup function
 */
function focusTrap(element) {
  const focusableElements = getFocusableElements(element)
  const firstFocusableEl = focusableElements[0]
  const lastFocusableEl = focusableElements[focusableElements.length - 1]

  // Wait for the case the element was not yet rendered
  setTimeout(() => firstFocusableEl.focus(), 50)

  /**
   * Get all focusable elements inside `element`
   * @param {HTMLElement} element - DOM element to focus trap inside
   * @return {HTMLElement[]} List of focusable elements
   */
  function getFocusableElements(element = document) {
    return [
      ...element.querySelectorAll(
        'a, button, details, input, select, textarea, [tabindex]:not([tabindex="-1"])'
      ),
    ].filter((e) => !e.hasAttribute('disabled'))
  }

  function handleKeyDown(e) {
    const TAB = 9
    const isTab = e.key.toLowerCase() === 'tab' || e.keyCode === TAB

    if (!isTab) return

    if (e.shiftKey) {
      if (document.activeElement === firstFocusableEl) {
        lastFocusableEl.focus()
        e.preventDefault()
      }
    } else {
      if (document.activeElement === lastFocusableEl) {
        firstFocusableEl.focus()
        e.preventDefault()
      }
    }
  }

  element.addEventListener('keydown', handleKeyDown)

  return function cleanup() {
    element.removeEventListener('keydown', handleKeyDown)
  }
}

window.appdata = () => ({
  dark: Alpine.$persist('dark'),
  toggleDarkMode() {
    this.dark = !this.dark
  },
  isSideMenuOpen: false,
  toggleSideMenu() {
    this.isSideMenuOpen = !this.isSideMenuOpen
  },
  closeSideMenu() {
    this.isSideMenuOpen = false
  },

  // Modal
  isModalOpen: false,
  trapCleanup: null,
  openModal(el) {
    this.isModalOpen = true
    this.trapCleanup = focusTrap(el)
  },
  closeModal() {
    this.isModalOpen = false
    this.trapCleanup()
  },
});

window.Alpine = Alpine;

Alpine.plugin(persist);
Alpine.start();