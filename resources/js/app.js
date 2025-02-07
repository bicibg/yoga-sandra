import $ from 'jquery';
window.$ = window.jQuery = $;
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import './bootstrap';

import TextAlign from '@tiptap/extension-text-align';

export default {
    extensions: [
        TextAlign.configure({
            types: ['paragraph', 'heading'], // Enable alignment for specific blocks
        }),
    ],
};
