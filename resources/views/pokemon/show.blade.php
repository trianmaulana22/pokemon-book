<x-home>
    <div class="container p-4 flex flex-wrap justify-center items-center gap-8">
        <div class="mb-8">
            <h1 class="text-2xl font-bold md:text-3xl lg:text-4xl">
                No.
                {{ $pokemon['id'] }}
                {{ $pokemon['jp_name'] }}
            </h1>
            <p class="text-lg">
                type:
                {{ isset($pokemon->type1) ? $pokemon->type1 : 'タイプ情報なし' }}
                @if($pokemon->type2) ・ {{ $pokemon->type2 }}@endif
            </p>
            <table>
                <tr>
                    <td>
                        <img src="{{ $pokemon['front_default'] }}"
                        class="w-48 h-auto rounded-lg shadow-md ">
                    </td>
                    <td>
                        <img src="{{ $pokemon['back_default'] }}"
                        class="w-48 h-auto rounded-lg shadow-md ">
                    </td>
                    <td>
                        <img src="{{ $pokemon['official_artwork_front_default'] }}"
                        class="w-full h-auto rounded-lg shadow-md ">
                    </td>
                </tr>

            </table>
        </div>
        <div class="mt-5">
        <div class="text-lg font-bold space-y-3">
                <table>
                <tr>
                    <td>Hp</td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td>{{ $pokemon['hp'] }}</td>
                    <td>
                        <div class="flex">
                            @for($i = 0; $i < $pokemon['hp'] / 10; $i++)
                            <div class="w-3 h-3 bg-green-400 mr-1"></div>
                            @endfor
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Attack</td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td>{{ $pokemon['attack'] }}</td>
                    <td>
                        <div class="flex">
                            @for($i = 0; $i < $pokemon['attack'] / 10; $i++)
                            <div class="w-3 h-3 bg-green-400 mr-1"></div>
                            @endfor
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Defense</td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td>{{ $pokemon['defense'] }}</td>
                    <td>
                        <div class="flex">
                            @for($i = 0; $i < $pokemon['defense'] / 10; $i++)
                            <div class="w-3 h-3 bg-green-400 mr-1"></div>
                            @endfor
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Special Attack</td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td>{{ $pokemon['special_attack'] }}</td>
                    <td>
                        <div class="flex">
                            @for($i = 0; $i < $pokemon['special_attack'] / 10; $i++)
                            <div class="w-3 h-3 bg-green-400 mr-1"></div>
                            @endfor
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Special Defense</td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td>{{ $pokemon['special_defense'] }}</td>
                    <td>
                        <div class="flex">
                            @for($i = 0; $i < $pokemon['special_defense'] / 10; $i++)
                            <div class="w-3 h-3 bg-green-400 mr-1"></div>
                            @endfor
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Speed</td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td>{{ $pokemon['speed'] }}</td>
                    <td>
                        <div class="flex">
                            @for($i = 0; $i < $pokemon['speed'] / 10; $i++)
                            <div class="w-3 h-3 bg-green-400 mr-1"></div>
                            @endfor
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Total Stats</td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td>{{ $pokemon['total_stats'] }}</td>
                    <td>
                    </td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</x-home>
