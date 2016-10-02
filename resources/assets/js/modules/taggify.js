export default function (tags = []) {
    'use strict';

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

    document.body.appendChild(section);
}
