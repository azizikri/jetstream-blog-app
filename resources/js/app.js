import './bootstrap';

import Alpine from 'alpinejs';
import Editor from '@toast-ui/editor'
import '@toast-ui/editor/dist/toastui-editor.css';

window.Alpine = Alpine;

Alpine.start();

const editor = new Editor({
  el: document.querySelector('#editor'),
  height: '400px',
  initialEditType: 'markdown',
  placeholder: 'Write something cool!',
})

if (document.querySelector('#createPostForm')) {
    document.querySelector('#createPostForm').addEventListener('submit', e => {
        e.preventDefault();
        document.querySelector('#content').value = editor.getMarkdown();
        e.target.submit();
    });
}

if (document.querySelector('#editPostForm')) {
    editor.setMarkdown(document.querySelector('#oldContent').value);

    document.querySelector('#editPostForm').addEventListener('submit', e => {
        e.preventDefault();
        document.querySelector('#content').value = editor.getMarkdown();
        e.target.submit();
    });
}
