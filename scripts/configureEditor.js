const code_Mirror = CodeMirror.fromTextArea(
    document.getElementById("code"),
    {
        lineNumbers: true,
        theme: 'dracula',
        mode: "python"
    }
)

code_Mirror.setSize("100%", "570px");
console.log(code_Mirror)