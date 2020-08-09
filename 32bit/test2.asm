%include "io.inc"

section .data
    msg db 'SALAM', 0
    salam db 'SALAM', 0

section .text
    global CMAIN
CMAIN:
    mov ebp, esp
    PRINT_STRING msg
    NEWLINE
    PRINT_STRING salam
    NEWLINE
    xor eax, eax
    ret