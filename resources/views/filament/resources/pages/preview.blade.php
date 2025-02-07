<div x-data="{ content: '' }" x-init="content = $el.parentElement.getAttribute('data-content')">
    <div x-html="content"></div>
</div>
