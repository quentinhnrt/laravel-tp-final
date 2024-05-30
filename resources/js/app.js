import './bootstrap';
import barba from '@barba/core';
import barbaCss from '@barba/css';

barba.use(barbaCss);

barba.init({
    transitions: [
        {
            name: 'with-cover',
            to: {
                namespace: ['with-cover'],
            },
            leave() {},
            enter() {},
        },
    ],
});
