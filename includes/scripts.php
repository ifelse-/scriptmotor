     <!-- jQuery -->
     <script src="assets/js/jquery-3.6.0.min.js"></script>
     <script src="assets/js/jquery-migrate-3.4.0.min.js"></script>
 
     <!-- plugins -->
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/ScrollTrigger.min.js"></script>

     <!-- code editor -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.js" integrity="sha512-8RnEqURPUc5aqFEN04aQEiPlSAdE0jlFS/9iGgUyNtwFnSKCXhmB6ZTNl7LnDtDWKabJIASzXrzD0K+LYexU9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/xml/xml.min.js" integrity="sha512-LarNmzVokUmcA7aUDtqZ6oTS+YXmUKzpGdm8DxC46A6AHu+PQiYCUlwEGWidjVYMo/QXZMFMIadZtrkfApYp/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script>
        const codeEditor = document.getElementById('code-editor');
        const editor = CodeMirror.fromTextArea(codeEditor, {
        mode: 'xml, text/jsx, text/typescript-jsx', // Set the code mode (e.g., javascript, html, css)
        htmlMode: true,
        theme: 'darcula', // Choose a code theme
        lineNumbers: true, // Display line numbers
        });
        editor.markText({line: 6, ch: 26}, {line: 6, ch: 42}, {className: "styled-background"});
     </script>
 
     <!-- custom scripts -->
     <script src="assets/js/scripts.js"></script>