class Solution {
public:
    vector<string> letterCombinations(string digits) {
        vector<string> ans;
        if(digits.size()==0) return ans;
        vector<string> mp={"","","abc","def","ghi","jkl","mno","pqrs","tuv","wxyz"};
        string str="";
        backtrack(str,ans,mp,0,digits);
        return ans;
    }
    void backtrack(string str,vector<string> &ans, vector<string> mp,int index,string digits)
    {
        if(str.size()==digits.size())
        {
            ans.push_back(str);
            return;
        }
        for(int i=0;i<mp[digits[index]-'0'].size();i++)
        {
            backtrack(str+mp[digits[index]-'0'][i],ans,mp,index+1,digits);
        }
    }
};