export default function (containerSelector, tags = []) {
    'use strict';

    let container = document.querySelector(containerSelector);

    if (!container) {
        throw new Error('Tagify container is null.');
    }

    let section = document.createElement('section');

    tags.forEach(tag => {
        let a = document.createElement('a');

        a.className = 'label label-default';
        a.href = '#';
        a.textContent = tag;
        a.rel = 'tag';
        a.style = 'margin: 0.25rem';

        section.appendChild(a);
    });

    container.appendChild(section);
}
