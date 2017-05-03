window.sr = ScrollReveal();
sr.reveal('.agile-header', { duration: 1500, origin: 'top', scale: 1, container: '.container' });
sr.reveal('.navbar', { duration: 1500, origin: 'bottom', scale: 1, delay: 500, distance: '50px' });
sr.reveal('.w3ls_head', { duration: 1500, origin: 'top', scale: 1, reset: false });
sr.reveal('.w3ls_head + p', { duration: 1500, origin: 'bottom', reset: true });
sr.reveal('.chrt_grid', { duration: 1500, origin: 'bottom', reset: true }, 50);
sr.reveal('.w3ls_courses_left_grid h3', { duration: 1500, origin: 'bottom', reset: true, delay: 500 }, 50);
sr.reveal('.w3ls_courses_left_grid p', { duration: 1500, origin: 'right', reset: true, delay: 800 }, 50);
sr.reveal('.w3ls_courses_left_grid img', { duration: 1500, origin: 'left', reset: true, delay: 800 }, 50);
sr.reveal('.agileinfo_choose_right .col-sm-6', { duration: 1500, origin: 'bottom', reset: true }, 50);

