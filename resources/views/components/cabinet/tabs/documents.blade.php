<?php
/**
 * @var \Illuminate\Database\Eloquent\Collection|\App\Models\UserDocument[] $documents
 */
?>

<div class="docs">
    <div class="name">
        Документация
    </div>
    <table>
        <thead>
        <tr>
            <td></td>
            <td>Дата окончания подписки</td>
            <td>Дата продления подписки</td>
            <td>Формат</td>
        </tr>
        </thead>
        <tbody>
        @foreach($documents as $document)
            <tr>
                <td>Счет №{{ $document->number }} <a class="link"></a></td>
                <td>
                    <div class="n">Дата окончания подписки</div>
                    {{ $document->date_end->format('d.m.Y') }}
                </td>
                <td>
                    <div class="n">Дата продления подписки</div>
                    {{ $document->date_renew->format('d.m.Y') }}
                </td>
                <td>
                    <div class="n">Формат</div>
                    <a href="{{ $document->getPdfUrl() }}" class="pdf">.PDF</a>
                    <a href="{{ $document->getXlsxUrl() }}" class="xls">.XLS</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
