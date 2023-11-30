<?php 

namespace App\Http\Repositories;
use App\Models\Group;
use Illuminate\Support\Facades\DB;

class SqlGroup
{
    public function getGroup($count)
    {
        return DB::table('groups')->select('g_id','g_name','g_users','created_at')->limit($count)->latest()->get();
    }

    public function persist(Group $group): void
    {
        DB::table('groups')->upsert([
            'g_id' => $group->getGroupId(),
            'g_name' => $group->getGroupName(),
            'g_description' => $group->getGroupDescription(),
            'g_users' => $group->getGroupUsers(),
        ], 'g_id');
    }
    
    
    public function searchGroup(string $group)
    {
        return DB::table('groups')->select('g_id','g_name','g_users','created_at')->where('g_name', 'ilike', '%'.$group.'%')->get();
    }

    public function getGroupById(string $id)
    {
        $group = DB::table('groups')->where('g_id', '=', $id)->get();
        return $this->returnRow([$group])[0];
    }

    public function returnRow(array $row)
    {
        $group = [];
        foreach($row as $r)
        {
            $group[] = new Group(
                $r->g_id, 
                $r->g_name, 
                $r->g_description, 
                $r->g_users,
                $r->created_at
            );
        }
        return $group;
    }
    
}