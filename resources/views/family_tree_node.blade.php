<div class="member">
    <h3>{{ $member->Name }}</h3>
    <p>Date Joined: {{ $member->DateJoin }}</p>
    <p>Personal Sales: {{ $member->TotalPersonalPurchase }}</p>
    <p>Group Sales: {{ $member->TotalGroupPurchase }}</p>
</div>

@if ($member->children)
    <div class="children">
        @for ($j = 0; $j < count($member->children); $j++)
            <div class="memberchild">
                @include('family_tree_node', ['member' => $member->children[$j]])
            </div>
        @endfor
    </div>
@endif