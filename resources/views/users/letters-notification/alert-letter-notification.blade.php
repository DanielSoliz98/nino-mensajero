<a class="dropdown-item" href={{ route('user.letter.read', $notification->data['letter']['id']) }}>
{{substr($notification->data['letter']['content'],0,14)  }}  | ALERTA
</a>