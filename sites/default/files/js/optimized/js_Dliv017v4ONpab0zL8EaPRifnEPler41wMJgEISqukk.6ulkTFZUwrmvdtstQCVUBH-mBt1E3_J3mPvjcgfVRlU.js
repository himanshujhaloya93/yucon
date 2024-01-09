/* Source and licensing information for the line(s) below can be found at http://yucon.local/core/themes/claro/js/mobile.install.js. */
(() => {
  function findActiveStep(steps) {
    for (let i = 0; i < steps.length; i++) {
      if (steps[i].className === 'is-active') {
        return i + 1;
      }
    }
    // The final "Finished" step is never "active".
    if (steps[steps.length - 1].className === 'done') {
      return steps.length;
    }
    return 0;
  }

  function installStepsSetup() {
    const steps = document.querySelectorAll('.task-list li');
    if (steps.length) {
      const header = document.querySelector('header[role="banner"]');
      const stepIndicator = document.createElement('div');
      stepIndicator.className = 'step-indicator';
      stepIndicator.innerHTML = `${findActiveStep(steps)}/${steps.length}`;
      header.appendChild(stepIndicator);
    }
  }

  if (document.addEventListener) {
    document.addEventListener('DOMContentLoaded', installStepsSetup);
  }
})();

/* Source and licensing information for the above line(s) can be found at http://yucon.local/core/themes/claro/js/mobile.install.js. */