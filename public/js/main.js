document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.url-form');
    const copyButton = document.querySelector('.copy-btn');

    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        let origin = document.querySelector('.url-origin').value;
        let csrf = form.querySelector("input[name='csrf']").value;
        let data = {
            origin,
            "_token": csrf
        };
        if(!origin || !csrf || !isValidUrl(origin) ){
            return;
        }
        let response = await fetch(form.action, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",

            },
            body: JSON.stringify(data)
        });
        let json = await response.json();
        if(response.ok){
            if(!json.data)
                return;

            console.log(json)
            let shortenedUrlField = document.querySelector('.new-url');
            shortenedUrlField.value = json.data.shortened;

        }else{
            console.error('Error');
        }
    });

    copyButton.addEventListener('click',function (){
        if (!navigator.clipboard) {
            fallbackCopyTextToClipboard(text);
            return;
        }

        let shortenedUrlField = document.querySelector('.new-url');
        navigator.clipboard.writeText(shortenedUrlField.value);
    });

    const isValidUrl = urlString=> {
        try {
            return Boolean(new URL(urlString));
        }
        catch(e){
            return false;
        }
    }
});
